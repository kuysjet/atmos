<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>QR Code Reader</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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

    .table-responsive {
      overflow-x: auto;
    }

      
  </style>
</head>
<body>
  <div class="container">
    <h1>DEMO</h1>

    <div class="row mb-2">
      <div class="col-md-12">
        <label for="timeOption">Select Scan Option:</label>
        <select class="form-control" id="timeOption">
          <option value="timeIn">Time In</option>
          <option value="timeOut">Time Out</option>
        </select>
      </div>
    </div>



    <!-- QR SCANNER CODE BELOW  -->
    <div class="row">
      <div class="col-md-6 col-sm-12">
        <div id="reader"></div>
      </div>
      <audio id="successSound" src="audio/scanner-beep.mp3" preload="auto"></audio>
      <audio id="errorSound" src="audio/error_sound.mp3" preload="auto"></audio>
      <div class="col-md-6 col-sm-12">
        <h4>Scan Result</h4>
        <div class="table-responsive">
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
    </div>

    <!-- Bootstrap Alert for Success Message -->
    <div id="SuccessAlert" class="alert alert-success alert-dismissible fade show mt-3" role="alert" style="display: none;">
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
      ],
      pageLength: 5, // Display 5 rows per page
      order: [[1, 'desc']], // Optional: if you have a timestamp or sequence column, order by it in descending order
    });

    var lastScanTime = 0; // Timestamp of the last successful scan


  function onScanSuccess(qrCodeMessage) {
    
    var currentTime = Date.now();
    // Check if 2 seconds have passed since the last scan
    if (currentTime - lastScanTime < 2000) return;
    // Update last scan time
    lastScanTime = currentTime;

  var currentTime = new Date().toLocaleTimeString();
  var timeOption = $('#timeOption').val();

  var qrCodeExists = resultTable.data().toArray().some(row => row[0] === qrCodeMessage);
  var rowIndex = resultTable.data().toArray().findIndex(row => row[0] === qrCodeMessage);

  if(timeOption === "timeIn") {
    if (!qrCodeExists) {
      // Add new record with Time In
      resultTable.row.add([
        qrCodeMessage,
        currentTime, // Time In
        '', // Time Out initially empty
        '<button type="button" class="btn btn-danger btn-sm delete-btn"><i class="fas fa-trash-alt"></i></button>'
      ]).order([1, 'desc']).draw(false); // 'draw(false)' keeps the current paging
      // Move to the first page where the newest row is
    resultTable.page('first').draw('page');
      playSuccessSound();
    } else {
      // Show alert for already scanned Time In
      Swal.fire({
        icon: 'warning',
        title: 'Already Time In',
        text: 'This QR code has already been scanned for Time In.',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'OK'
      });
      errorSound.play();
    }
  } else if (timeOption === "timeOut") {
    if (qrCodeExists && resultTable.cell(rowIndex, 2).data() === '') {
      // Update Time Out for existing record
      resultTable.cell(rowIndex, 2).data(currentTime).draw();
      playSuccessSound();
    } else if (!qrCodeExists) {
      // Show alert for missing Time In record
      Swal.fire({
        icon: 'error',
        title: 'No Time In Record',
        text: 'Please Time In first before scanning for Time Out.',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'OK'
      });
      errorSound.play();
    } else {
      // Show alert for already scanned Time Out
      Swal.fire({
        icon: 'warning',
        title: 'Already Time Out',
        text: 'This QR code has already been scanned for Time Out.',
        confirmButtonColor: '#3085d6',
        confirmButtonText: 'OK'
      });
      errorSound.play();
    }
  }
}

function playSuccessSound() {
    // Play success sound
    var successSound = document.getElementById('successSound');
    if (successSound) {
        successSound.play();
    }

    // Show SweetAlert success message and close it after 5 seconds
    Swal.fire({
        icon: 'success',
        title: 'Scanned Successfully!',
        text: 'QR Code has been scanned successfully.',
        showConfirmButton: false,
        timer: 2500
    });
}



    function showError(message) {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: message,
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'OK'
        });

        // Play error sound
        var errorSound = document.getElementById('errorSound');
        if (errorSound) {
            errorSound.play();
        }
    }


    function onScanError(errorMessage) {
        // error logic
    }

    var html5QrCodeScanner = new Html5QrcodeScanner("reader", {
      fps: 10,  
      qrbox: 250
    });

    html5QrCodeScanner.render(onScanSuccess, onScanError);

    $('#fileInput').on('change', function (e) {
      // ... (your existing file input change event code)
    });

   // Delete button click event with SweetAlert2 confirmation dialog
$('#resultTable').on('click', '.delete-btn', function () {
    var row = $(this).closest('tr');
    var data = resultTable.row(row).data(); // Get the entire row data
    var qrCode = data[0]; // Assuming QR code is in the first column

    // SweetAlert2 confirmation dialog
    Swal.fire({
        title: 'Are you sure?',
        text: 'Do you want to delete this QR code: ' + qrCode + '?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
    if (result.isConfirmed) {
        // User clicked 'Yes, delete it!'
        resultTable.row(row).remove().draw();

        // Show a success message and close it after 3 seconds
        Swal.fire({
            title: 'Deleted!',
            text: 'The QR code has been deleted.',
            icon: 'success',
            timer: 2500,
            showConfirmButton: false
        });
    }
  });
});


  </script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

