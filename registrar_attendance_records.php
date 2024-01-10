<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
  <!-- Bootstrap JS and Popper.js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/amalogo.png" alt="ACLC LOGO" height="130" width="100">
  </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item ml-2">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li> -->
      <li class="nav-item d-none d-sm-inline-block">
        <span class="nav-link">Attendance Monitoring System</span>
      </li>
    </ul>

   <!-- Right navbar links -->
   <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle align-center" href="#" id="userDropdown" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="d-none d-lg-inline text-gray-600 small">Registrar</span>
              <img class="img-profile rounded-circle" src="dist/img/user3-128x128.jpg" width="20" height="20">
          </a>
          <!-- Dropdown - User Information -->
          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
              aria-labelledby="userDropdown">
              <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
              </a>
              <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
              </a>
          </div>
      </li>
    </ul>
    
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <div class="brand-link">
      <img src="dist/img/amalogo.png" alt="ACLC Logo" class="brand-image img-circle elevation-3">
      <span class="brand-text font-weight-light">ACLC College Iriga Inc.</span>
</div>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user3-128x128.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <div class="d-block text-light">Registrar</div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="registrar_dashboard.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
              <a href="registrar_attendance_records.php" class="nav-link active">
                <i class="nav-icon fas fa-layer-group"></i>
                <p>
                  Attendance Reports
                </p>
              </a>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">SCO Dashboard</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="main p-3">
      <div id="content" class="container">
        <!-- Your page content goes here -->
        <h2>Attendance Reports</h2>

          <div class="card header card-outline card-primary m-0 p-3">
            <!-- Add button with icon -->
            <!-- Filter dropdowns for Academic Year and Events -->
            <div class="row mb-3">
                <div class="col-md-3">
                    <label for="academicYearFilter" class="form-label">Academic Year:</label>
                    <select id="academicYearFilter" class="form-select" onchange="applyFilters()">
                        <option value=""></option>
                        <option value="2022-2023">2022-2023</option>
                        <!-- Add more academic years as needed -->
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="eventFilter" class="form-label">Event:</label>
                    <select id="eventFilter" class="form-select" onchange="applyFilters()">
                        <option value=""></option>
                        <option value="Event1">Annual Gala</option>
                        <!-- Add more events as needed -->
                    </select>
                </div>
                <div class="col-md-2 align-self-end">
                    <button type="button" class="btn btn-primary" onclick="applyFilters()">
                        <i class="fas fa-filter"></i> Filter
                    </button>
                </div>
            </div>

            <!-- Export to Excel and Print buttons with icons -->
            <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-primary me-2" onclick="exportToExcel()">
                    <i class="fas fa-file-excel"></i> Export to Excel
                </button>
                <button type="button" class="btn btn-secondary" onclick="printTable()">
                    <i class="fas fa-print"></i> Print
                </button>
            </div>
          </div>
          <div class="card body p-3">
          <div class="table-responsive">
          <table id="attendanceTable" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <!-- Add or remove columns as needed -->
                    <th>#</th>
                    <th>First_name</th>
                    <th>Last_name</th>
                    <th>Course</th>
                    <th>Level</th>
                    <th>Section</th>
                    <th>Contact_number</th>
                    <th>Address</th>
                    <th>Time-in</th>
                    <th>Time-out</th>
                </tr>
            </thead>
            <tbody>
                <!-- Add data rows as needed -->
                <tr>
                    <td>1</td>
                    <td>John</td>
                    <td>Doe</td>
                    <td>ABM</td>
                    <td>12</td>
                    <td>A</td>
                    <td>09375889492</td>
                    <td>San Nicolas, Iriga</td>
                    <td>Jul 26, 2024 08:00 AM</td>
                    <td>Jul 26, 2024 05:00 PM</td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Footer -->
  <footer class="main-footer small">
    <strong>Copyright &copy; atmos 2023</strong> All rights reserved.
  </footer>
  <!-- /.Footer -->
</div>
<!-- ./wrapper -->



    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

    <!-- Initialize DataTable with options and apply initial filters -->
    <script>
       $(document).ready(function () {
        // Initialize DataTable with options
        var table = $('#attendanceTable').DataTable({
            // Add DataTable options as needed
            colReorder: true // Enable column reorder
        });

        // Apply initial filters
        applyFilters();

        // Add column selection dropdown
        new $.fn.dataTable.Buttons(table, {
            buttons: [
                {
                    extend: 'colvis',
                    text: 'Column Selection',
                    postfixButtons: ['colvisRestore']
                }
            ]
        });

        table.buttons().container()
            .appendTo($('.col-md-3:eq(1)', table.table().container()));
    });

        // // Function to apply filters
        // function applyFilters() {
        //     var academicYearFilter = $('#academicYearFilter').val();
        //     var eventFilter = $('#eventFilter').val();

        //     // Add logic to filter data based on selected academic year and event
        //     // You may use DataTables API to redraw the table with filtered data

        //     // Example: Reload the table with filtered data
        //     var table = $('#attendanceTable').DataTable();
        //     table.clear().draw();
        //     // Add logic to fetch and display filtered data
        //     // You may use AJAX to fetch data from the server based on filters
        //     // Update the table using table.rows.add() and then table.draw()
        // }

        // Function to export data to Excel
        function exportToExcel() {
            // Get data from DataTable
            var table = $('#attendanceTable').DataTable();
            var data = table.rows().data().toArray();

            // Create a worksheet
            var ws = XLSX.utils.json_to_sheet(data);

            // Create a workbook
            var wb = XLSX.utils.book_new();
            XLSX.utils.book_append_sheet(wb, ws, "Attendance");

            // Save the file
            XLSX.writeFile(wb, 'attendance_report.xlsx');
        }

        // Function to print the table
        function printTable() {
            window.print();
        }
    </script>




<!-- Add Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Add Academic Year</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Add your form or input fields for adding academic year here -->
                    <form>
                        <!-- Example input field -->
                        <div class="mb-3">
                            <label for="academicYear" class="form-label">Academic Year</label>
                            <input type="text" class="form-control" id="academicYear" placeholder="Enter academic year">
                        </div>
                        <!-- Add more input fields as needed -->

                        <!-- Add submit button -->
                        <button type="submit" class="btn btn-primary">Add Academic Year</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Academic Year</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Edit form for academic year -->
                    <form>
                        <div class="mb-3">
                            <label for="editAcademicYear" class="form-label">Academic Year</label>
                            <input type="text" class="form-control" id="editAcademicYear" placeholder="Enter academic year" value="2022-2023">
                        </div>

                        <div class="mb-3">
                            <label for="editStatus" class="form-label">Status</label>
                            <select class="form-select" id="editStatus">
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
                            </select>
                        </div>

                        <!-- Add more input fields as needed -->

                        <!-- Save changes button -->
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Delete Academic Year</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete the academic year?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
