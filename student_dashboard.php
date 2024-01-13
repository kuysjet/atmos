<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Student | Page</title>


  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

  <style>
  .custom-card {
    background-image: url('dist/img/idCARD.png');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    color: white;
    min-height: auto;
  }

  .profile-picture {
    width: 150px;
    height: 150px;
    object-fit: cover; /* Ensure the image covers the entire box */
    border: 3px solid #fff; /* Add a white border around the image */
    margin: 0 auto; /* Center the image horizontally */
    display: block;
  }

  .qr-code {
    max-width: 100%;
    height: auto;
    margin-bottom: 20px; /* Add some space below the QR code */
  }

    .custom-card {
    background-image: url('dist/img/idCARD.png');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    color: white;
    min-height: auto;
  }

  .profile-picture {
    width: 150px;
    height: 150px;
    object-fit: cover; /* Ensure the image covers the entire box */
    border: 3px solid #fff; /* Add a white border around the image */
    border-radius: 50%; /* Make the image a circle */
    margin: 0 auto; /* Center the image horizontally */
    display: block;
  }

  .qr-code {
    max-width: 100%;
    height: auto;
    margin-bottom: 20px; /* Add some space below the QR code */
  }
</style>

</head>
<body>
<div class="wrapper">

  <!-- Preloader -->
  <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/amalogo.png" alt="ACLC LOGO" height="130" width="100">
  </div> -->


  <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <!-- Navbar Brand -->
    <a class="navbar-brand" href="#">Digital QR ID</a>

    <!-- Toggler for Mobile -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar Links -->
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto">
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
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="dist/img/amalogo.png" download="YourID.png">
                  <i class="fas fa-download fa-sm fa-fw mr-2 text-gray-400"></i>
                  Download
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





<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-8 col-lg-6">
      <div class="card custom-card">
        <div class="card-header text-center mt-5">
          <img src="dist/img/user8-128x128.jpg" alt="Profile Picture" class="profile-picture">
        </div>
        <div class="card-body text-center">
          <h1 class="card-text">John Doe</h1>
          <h4 class="card-text">BSCS 4</h4>
        </div>
        <div class="card-footer text-center mb-5">
          <img src="dist/img/qrcode.png" alt="QR Code" class="qr-code">
        </div>
      </div>
    </div>
  </div>
</div>


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



  <footer class="main-footer text-center m-0">
    <small><strong> &copy; 2023 atmos </strong></small>
  </footer>



<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
</body>
</html>
