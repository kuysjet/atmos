<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Student | Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">

  <style>
  .custom-card {
    background-color: #f8f9fa; /* Lighter background color */
    color: #212529; /* Adjust text color if needed */
    border-style: solid;
  }

  .custom-card .form-label {
    font-weight: 500; /* Increased font weight for labels */
  }

  .custom-card .card-text {
    font-weight: 500; /* Increased font weight for text */
    font-size: 1.1rem; /* Slightly larger text size */
    color: darkslategrey;
  }

  .card-header {
    background-color: lightgrey;
  }
</style>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/amalogo.png" alt="ACLC LOGO" height="130" width="100">
  </div>


  <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <!-- Navbar Brand -->
    <a class="navbar-brand" href="#">Student Digital ID</a>

    <!-- Toggler for Mobile -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar Links -->
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="dist/img/amalogo.png" download="YourID.png">
            <i class="fas fa-download"></i> Download Image
          </a>
        </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle align-center" href="#" id="userDropdown" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="d-none d-lg-inline text-gray-600 small">John Doe</span>
              <img class="img-profile rounded-circle" src="dist/img/user8-128x128.jpg" width="20" height="20">
          </a>
          <!-- Dropdown - User Information -->
          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
              aria-labelledby="userDropdown">
              <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
              </a>
              <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
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
    </div>
  </div>
</nav>
<!-- /.navbar -->





              


<!-- card -->
<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-8 col-lg-6">
      <div class="card custom-card">
        <div class="card-header text-center">
          <img src="dist/img/user8-128x128.jpg" alt="Profile Picture" class="img-fluid rounded-circle" style="width: 150px; height: 150px;">
          </div>
        <div class="card-body text-center">
          <div class="row mb-1">
            <div class="col-6 text-center">
              <label class="form-label"><small><b>Name</b></small></label>
            </div>
            <div class="col-6 text-left">
              <p class="card-text">John Doe</p>
            </div>
          </div>

          <div class="row mb-1">
            <div class="col-6 text-center">
              <label class="form-label"><small><b>USN</b></small></label>
            </div>
            <div class="col-6 text-left">
              <p class="card-text">20002849500</p>
            </div>
          </div>

          <div class="row mb-1">
            <div class="col-6 text-center">
              <label class="form-label"><small><b>Course</b></small></label>
            </div>
            <div class="col-6 text-left">
              <p class="card-text">Bachelor of Science in Computer Science 4</p>
            </div>
          </div>

          <!-- <div class="row mb-1">
            <div class="col-6 text-center">
              <label class="form-label"><small><b>Address</b></small></label>
            </div>
            <div class="col-6 text-left">
              <p class="card-text">San Miguel, Iriga City</p>
            </div>
          </div>

          <div class="row mb-1">
            <div class="col-6 text-center">
              <label class="form-label"><small><b>Contact Number</b></small></label>
            </div>
            <div class="col-6 text-left">
              <p class="card-text">09171234567</p>
            </div>
          </div> -->
        </div>
        <div class="card-footer text-center">
          <img src="dist/img/qrcode.png" alt="QR Code" class="img-fluid" style="width: 200px; height: 200px;">
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /card -->




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
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
</body>
</html>
