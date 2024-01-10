<?php
session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

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
  .gradient-custom-2 {
    /* Fallback for old browsers */
    background: #0a2e46; /* A single color fallback (navy blue) */

    /* Chrome 10-25, Safari 5.1-6 */
    background: -webkit-linear-gradient(to right, #0a2e46, #003366, #004b8d, #0063b2);

    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    background: linear-gradient(to right, #0a2e46, #003366, #004b8d, #0063b2);
}


    @media (min-width: 768px) {
    .gradient-form {
    height: 100vh !important;
    }
    }
    @media (min-width: 769px) {
    .gradient-custom-2 {
    border-top-right-radius: .3rem;
    border-bottom-right-radius: .3rem;
    }
    }

    .password-toggle-icon {
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
  }

  .password-toggle-icon {
    cursor: pointer;
    color: grey; 
  }
  
  </style>
</head>

<!-- Preloader -->
    <!-- <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="dist/img/amalogo.png" alt="ACLC LOGO" height="130" width="100">
    </div> -->


<body>

<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black h-100">
          <div class="row g-0 h-100">
            <div class="col-lg-6 h-100">
              <div class="card-body p-md-5 mx-md-4 h-100">

                <div class="text-center">
                  <img src="dist/img/amalogo.png"
                    style="width: 100px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1"></h4>
                </div>

                <form action="code.php" method="POST">
                  <p>Please login to your account</p>

                  <div class="form-outline mb-4">
                        <label class="form-label hidden-label" for="form2Example11">USN</label>
                        <input type="text" id="username" name="username" class="form-control" placeholder="Enter USN" required />
                  </div>
                  <div class="form-outline mb-4 position-relative">
                        <label class="form-label hidden-label" for="form2Example22">Password</label>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password" required />
                        <i class="fas fa-eye-slash password-toggle-icon mt-3" onclick="togglePassword('password')"></i>
                  </div>


                  <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Log
                      in</button>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">Attendance Monitoring with QR Code</h4>
                <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                  exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<script>
  function togglePassword(inputId) {
    var input = document.getElementById(inputId);
    var icon = document.querySelector('.password-toggle-icon');
    
    if (input.type === "password") {
      input.type = "text";
      icon.classList.remove("fa-eye-slash");
      icon.classList.add("fa-eye");
    } else {
      input.type = "password";
      icon.classList.remove("fa-eye");
      icon.classList.add("fa-eye-slash");
    }
  }
</script>

  
</body>
</html>
