<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>QR Code Reader</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html5-qrcode/2.3.8/html5-qrcode.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
  <script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <style>
    body {
      background-color: #f4f4f4;
      font-family: 'Arial', sans-serif;
    }

    h1 {
      text-align: center;
      margin-top: 20px;
    }

    #reader {
      width: 100%;
      max-width: 500px;
      margin: 0 auto;
    }

    .result {
      background-color: green;
      color: #fff;
      padding: 20px;
    }

    .dt-buttons {
      margin-bottom: 20px;
    }

    #fileInput {
      display: none;
    }

    #resultTable {
            border: 1px solid #ddd; /* Add a border to the table */
            border-collapse: collapse; /* Collapse the borders into a single border */
            width: 100%;
        }

        #resultTable th, #resultTable td {
            border: 1px solid #ddd; /* Add a border to table cells */
            padding: 8px; /* Add some padding to cells */
            text-align: left; /* Align text to the left within cells */
        }

        #torchButton {
            margin-top: 10px;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
  </style>
</head>
<body>
  <div class="container">
    <h1>DEMO</h1>

    <!-- QR SCANNER CODE BELOW  -->
    <div class="row">
      <div class="col-md-6 col-sm-12">
        <div id="reader"></div>
      </div>
      <audio id="successSound" src="audio/scanner-beep.mp3" preload="auto"></audio>
      <div class="col-md-6 col-sm-12">
        <h4 class="mt-4">Scan Result</h4>
        <table id="resultTable" class="table mt-3">
          <thead>
            <tr>
              <th>QR Code Results</th>
              <th>Time In</th>
              <th>Time Out</th>
              <th>Action</th> <!-- Added column for Delete button -->
            </tr>
          </thead>
          <tbody></tbody>
        </table>
      </div>
    </div>

    <!-- Bootstrap Alert for Success Message -->
    <div id="successAlert" class="alert alert-success alert-dismissible fade show mt-3" role="alert" style="display: none;">
      QR Code Scanned Successfully! &#10003;
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>

    <!-- DataTables Buttons -->
    <div class="dt-buttons">
      <input type="file" id="fileInput" accept=".xlsx, .xls" />
    </div>
  </div>

  <script>
    var resultTable = $('#resultTable').DataTable({
      dom: 'Bfrtip',
      buttons: [
        'excelHtml5',
        'print',
      ]
    });


function onScanSuccess(qrCodeMessage) {
  var currentTime = new Date().toLocaleTimeString();
  if (!resultTable.data().toArray().flat().includes(qrCodeMessage)) {
    resultTable.row.add([
      qrCodeMessage,
      currentTime, // Time In
      '', // Time Out (initially empty)
      '<button type="button" class="btn btn-danger btn-sm delete-btn">Delete</button>'
    ]).draw();
    $('#successAlert').show();
    setTimeout(function() {
      $('#successAlert').hide();
    }, 2000);

    var successSound = document.getElementById('successSound');
    if (successSound) {
      successSound.play();
    }
  } else {
    // Display SweetAlert2 for already scanned QR code with automatic hide after 1 second
    Swal.fire({
      icon: 'warning',
      title: 'QR Code Already Scanned',
      text: 'This QR code has already been scanned.',
      confirmButtonColor: '#3085d6',
      confirmButtonText: 'OK',
      timer: 1000, // 1 second
      timerProgressBar: true,
      willClose: () => {
        // You can add additional logic to run when the alert is closed
      }
    });
  }
}



    function onScanError(errorMessage) {
      // Handle Scan Error
    }

    var html5QrCodeScanner = new Html5QrcodeScanner("reader", {
      fps: 10,
      qrbox: 250
    });

    html5QrCodeScanner.render(onScanSuccess, onScanError);

    $('#fileInput').on('change', function (e) {
      // ... (your existing file input change event code)
    });

    // Delete button click event with confirmation dialog
    $('#resultTable').on('click', '.delete-btn', function () {
  var row = $(this).closest('tr');
  var data = resultTable.row(row).data(); // Get the entire row data

  // Assuming QR code is in the first column, time-in in the second column, and time-out in the third column
  var qrCode = data[0];
  var timeIn = data[1];
  var timeOut = new Date().toLocaleTimeString();

  if (confirm('Are you sure you want to delete this QR code: ' + qrCode + '?')) {
    resultTable.row(row).remove().draw();

    // You can do something with the time-in and time-out values, such as storing them or displaying them elsewhere
    console.log('QR Code:', qrCode, 'Time In:', timeIn, 'Time Out:', timeOut);
  }
});

  </script>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

