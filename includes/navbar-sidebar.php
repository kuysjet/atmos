  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-light bg-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item ml-2">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <span class="nav-link">Attendance Monitoring System with QR Code</span>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item dropdown no-arrow mr-3">
          <a class="nav-link dropdown-toggle align-center" href="#" id="userDropdown" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="d-none d-lg-inline text-gray-600 small">Alexander Pierce</span>
              <img class="img-profile rounded-circle" src="dist/img/user2-160x160.jpg" width="20" height="20">
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
    <div class="brand-link ml-1">
      <img src="dist/img/amalogo.png" alt="ACLC Logo" class="brand-image">
      <span class="brand-text font-weight-bold animate"><small>ACLC College Iriga Inc.</small></span>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <h6 class="d-block text-light">Alexander Pierce</h6>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
              <a href="admin_dashboard.php" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="academic_year.php" class="nav-link">
                <i class="nav-icon fas fa-calendar-day"></i>
                <p>
                  Academic Year
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="events.php" class="nav-link">
                <i class="nav-icon fas fa-th-list"></i>
                <p>
                  Events
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="students.php" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Students
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="courses.php" class="nav-link">
                <i class="nav-icon fas fa-graduation-cap"></i>
                <p>
                  Courses
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="officers.php" class="nav-link">
                <i class="nav-icon fas fa-user-friends"></i>
                <p>
                  Officers
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="attendance_reports.php" class="nav-link">
                <i class="nav-icon fas fa-layer-group"></i>
                <p>
                  Attendance Reports
                </p>
              </a>
            </li>
              </ul>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>