<?php include "includes/header.php" ?>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/amalogo.png" alt="ACLC LOGO" height="130" width="100">
  </div> -->

  <?php include "includes/navbar-sidebar.php" ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    

    <div class="main p-3">
      <div id="content" class="container">
        <!-- Your page content goes here -->
        <h2>Students</h2>

          <div class="card header card-outline card-primary m-0 p-3">
            <!-- Add button with icon -->
            <div class="d-flex justify-content-end mb-0">
            <!-- Excel Upload button -->
            <button type="button" class="btn btn-info mr-2 text-white" data-bs-toggle="modal" data-bs-target="#importExcelModal">
                <i class="fas fa-file-excel"></i> Excel Upload
            </button>

            <!-- Add Student button -->
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addStudentModal">
                <i class="fas fa-plus"></i> Add Student
            </button>
        </div>

          </div>
          <div class="card body p-3">
          <div class="table-responsive">
    <table id="studentTable" class="table table-hover table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th class="d-none">Photo</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Course</th>
                <th>Level</th>
                <th>Section</th>
                <th class="d-none">Contact Number</th>
                <th class="d-none">Address</th>
                <th class="d-none">QR Code</th> <!-- New column for QR code -->
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td class="d-none"><img src="dist/img/avatar1.png" alt="Avatar" class="avatar" style="width: 50px; height: 50px;"></td>
                <td>John</td>
                <td>Doe</td>
                <td>ABM</td>
                <td>12</td>
                <td>A</td>
                <td class="d-none">09759948333</td>
                <td class="d-none">123 Main St Manila City</td>
                <td class="d-none"><img src="dist/img/QR-1.png" alt="QR Code" class="qrcode" style="width: 50px; height: 50px;"></td> <!-- Placeholder for QR code image -->
                <td>
                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#viewStudentModal">
                        <i class="far fa-eye"></i>
                    </button>
                    <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editStudentModal">
                        <i class="fas fa-pencil-alt"></i>
                    </button>
                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteStudentModal">
                        <i class="fas fa-trash"></i>
                    </button>
                </td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
</div>
    </div>
</div>
        </div>
    </div>
  <!-- /.content-wrapper -->

  <!-- Footer -->
  <footer class="main-footer small">
    <strong> &copy; atmos 2023</strong> All rights reserved.
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

<!-- Your custom script for DataTable initialization -->
<script>
    $(document).ready(function() {
        $('#studentTable').DataTable();
    });
</script>


<!-- Add Student Modal -->
<div class="modal fade" id="addStudentModal" tabindex="-1" aria-labelledby="addStudentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addStudentModalLabel">Add Student</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3">
                    <div class="mb-3 col-md-6">
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="firstName" required>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lastName" required>
                    </div>
                    <div class="mb-3 col-md-4">
                        <label for="course" class="form-label">Course</label>
                        <select class="form-select" id="course" required>
                            <option selected disabled>Select Course</option>
                            <option value="Course1">ACT</option>
                            <option value="Course2">BSCS</option>
                            <option value="Course1">BSAIS</option>
                            <option value="Course2">Entrep</option>
                            <option value="Course1">STEM</option>
                            <option value="Course2">HUMSS</option>
                            <option value="Course1">GAS</option>
                            <option value="Course2">TVL</option>
                            <option value="Course2">ABM</option>
                            <!-- Add more courses as needed -->
                        </select>
                    </div>
                    <div class="mb-3 col-md-4">
                        <label for="level" class="form-label">Level</label>
                        <select class="form-select" id="level" required>
                            <option selected disabled>Select Level</option>
                            <option value="Level1">1</option>
                            <option value="Level2">2</option>
                            <option value="Level1">3</option>
                            <option value="Level2">4</option>
                            <!-- Add more levels as needed -->
                        </select>
                    </div>
                    <div class="mb-3 col-md-4">
                        <label for="section" class="form-label">Section</label>
                        <select class="form-select" id="section" required>
                            <option selected disabled>Select Section</option>
                            <option value="SectionA">A</option>
                            <option value="SectionB">B</option>
                            <option value="SectionB">C</option>
                            <option value="SectionB">n/a</option>
                            <!-- Add more sections as needed -->
                        </select>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="contactNumber" class="form-label">Contact Number</label>
                        <input type="tel" class="form-control" id="contactNumber" required>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" required>
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="photo" class="form-label">Photo</label>
                        <input type="file" class="form-control" id="photo">
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Add Student</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- View Student Modal -->
<div class="modal fade" id="viewStudentModal" tabindex="-1" aria-labelledby="viewStudentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewStudentModalLabel">View Student</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="text-center mb-4">
                    <img src="dist/img/avatar1.png" alt="Avatar" class="img-fluid rounded-circle" style="width: 100px; height: 100px;">
                </div>
                <form class="row g-3">
                    <div class="mb-3 col-md-6">
                        <label for="viewFirstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="viewFirstName" readonly value="John">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="viewLastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="viewLastName" readonly value="Doe">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="viewCourse" class="form-label">Course</label>
                        <input type="text" class="form-control" id="viewCourse" readonly value="ABM">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="viewLevel" class="form-label">Level</label>
                        <input type="text" class="form-control" id="viewLevel" readonly value="12">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="viewSection" class="form-label">Section</label>
                        <input type="text" class="form-control" id="viewSection" readonly value="A">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="viewContactNumber" class="form-label">Contact Number</label>
                        <input type="text" class="form-control" id="viewContactNumber" readonly value="09746435778">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="viewSection" class="form-label">Username</label>
                        <input type="text" class="form-control" id="viewSection" readonly value="Student_Username">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="viewContactNumber" class="form-label">Password</label>
                        <input type="text" class="form-control" id="viewContactNumber" readonly value="Password">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="viewAddress" class="form-label">Address</label>
                        <input type="text" class="form-control" id="viewAddress" readonly value="San Miguel Iriga City">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="viewQRCode" class="form-label">QR Code</label>
                        <img src="dist/img/QR-1.png" alt="QR Code" class="img-fluid" style="max-width: 120px;">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Edit Student Modal -->
<div class="modal fade" id="editStudentModal" tabindex="-1" aria-labelledby="editStudentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editStudentModalLabel">Edit Student</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3">
                    <div class="mb-3 col-md-6">
                        <label for="editFirstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="editFirstName" value="John">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="editLastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="editLastName" value="Doe">
                    </div>
                    <div class="mb-3 col-md-4">
                        <label for="editCourse" class="form-label">Course</label>
                        <input type="text" class="form-control" id="editCourse" value="ABM">
                    </div>
                    <div class="mb-3 col-md-2">
                        <label for="editLevel" class="form-label">Level</label>
                        <input type="text" class="form-control" id="editLevel" value="12">
                    </div>
                    <div class="mb-3 col-md-2">
                        <label for="editSection" class="form-label">Section</label>
                        <input type="text" class="form-control" id="editSection" value="A">
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="editContactNumber" class="form-label">Contact Number</label>
                        <input type="text" class="form-control" id="editContactNumber" value="097364637828">
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="editAddress" class="form-label">Address</label>
                        <input type="text" class="form-control" id="editAddress" value="San Miguel Iriga">
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="editPhoto" class="form-label">Photo</label>
                        <input type="file" class="form-control" id="editPhoto">
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- Delete Student Modal -->
<div class="modal fade" id="deleteStudentModal" tabindex="-1" aria-labelledby="deleteStudentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteStudentModalLabel">Delete Student</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3">
                    <div class="mb-3 col-md-6">
                        <label for="deleteFirstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="deleteFirstName" value="John" readonly>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="deleteLastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="deleteLastName" value="Doe" readonly>
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="deleteMessage" class="form-label">Are you sure you want to delete this student?</label>
                    </div>
                    <div class="col-md-12">
                        <button type="button" class="btn btn-danger" onclick="deleteStudent()">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Import Excel Modal -->
<div class="modal fade" id="importExcelModal" tabindex="-1" aria-labelledby="importExcelModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="importExcelModalLabel">Import Excel</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="excelFile" class="form-label">Choose Excel File</label>
                        <input type="file" class="form-control" id="excelFile" accept=".xlsx, .xls" required>
                    </div>
                    <!-- Add additional form elements as needed -->
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Upload Excel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


</body>
</html>
