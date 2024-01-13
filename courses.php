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
        <h2>Courses</h2>

          <div class="card header card-outline card-primary m-0 p-3">
            <!-- Add button with icon -->
            <div class="d-flex justify-content-end mb-0 ">
              <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addModal">
                <i class="fas fa-plus"></i> Add Course
              </button>
            </div>
          </div>
          <div class="card body p-3">
          <div class="table-responsive">
            <table id="coursesTable" class="table table-hover table-bordered">
              <thead>
                  <tr>
                      <th>#</th>
                      <th>Course</th>
                      <th>Level</th>
                      <th>Section</th>
                      <th>Actions</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>1</td>
                      <td>ABM</td>
                      <td>12</td>
                      <td>A</td>
                      <td>
                          <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#viewModal">
                              <i class="far fa-eye"></i>
                          </button>
                          <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal">
                              <i class="fas fa-pencil-alt"></i>
                          </button>
                          <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal">
                              <i class="fas fa-trash"></i>
                          </button>
                      </td>
                  </tr>
                  <!-- Add more rows as needed -->
                  <tr>
                      <td>2</td>
                      <td>GAS</td>
                      <td>12</td>
                      <td>B</td>
                      <td>
                          <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#viewModal">
                              <i class="far fa-eye"></i>
                          </button>
                          <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal">
                              <i class="fas fa-pencil-alt"></i>
                          </button>
                          <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal">
                              <i class="fas fa-trash"></i>
                          </button>
                      </td>
                  </tr>
                  <!-- Add more rows as needed -->
                  <tr>
                      <td>3</td>
                      <td>BSCS</td>
                      <td>3</td>
                      <td>N/A</td>
                      <td>
                          <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#viewModal">
                              <i class="far fa-eye"></i>
                          </button>
                          <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal">
                              <i class="fas fa-pencil-alt"></i>
                          </button>
                          <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal">
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
        $('#coursesTable').DataTable();
    });
</script>


<!-- Add Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Add Course</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Add your form or input fields for adding a course here -->
                    <form>
                        <!-- Example input fields -->
                        <div class="mb-3">
                            <label for="course" class="form-label">Course</label>
                            <input type="text" class="form-control" id="course" placeholder="Enter course">
                        </div>

                        <div class="mb-3">
                            <label for="level" class="form-label">Level</label>
                            <input type="text" class="form-control" id="level" placeholder="Enter level">
                        </div>

                        <div class="mb-3">
                            <label for="section" class="form-label">Section</label>
                            <input type="text" class="form-control" id="section" placeholder="Enter section">
                        </div>
                        <!-- Add more input fields as needed -->

                        <!-- Add submit button -->
                        <button type="submit" class="btn btn-primary">Add Course</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- View Modal -->
    <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewModalLabel">View Course</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Display all course information -->
                    <dl class="row">
                        <dt class="col-sm-3">Course</dt>
                        <dd class="col-sm-9" id="viewCourse">ABM</dd>

                        <dt class="col-sm-3">Level</dt>
                        <dd class="col-sm-9" id="viewLevel">12</dd>

                        <dt class="col-sm-3">Section</dt>
                        <dd class="col-sm-9" id="viewSection">A</dd>
                        
                        <!-- Add more data fields as needed -->  
                    </dl>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Course</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Edit form for a course -->
                    <form>
                        <div class="mb-3">
                            <label for="editCourse" class="form-label">Course</label>
                            <input type="text" class="form-control" id="editCourse" placeholder="Enter course" value="ABM">
                        </div>

                        <div class="mb-3">
                            <label for="editLevel" class="form-label">Level</label>
                            <input type="text" class="form-control" id="editLevel" placeholder="Enter level" value="12">
                        </div>

                        <div class="mb-3">
                            <label for="editSection" class="form-label">Section</label>
                            <input type="text" class="form-control" id="editSection" placeholder="Enter section" value="A">
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
                    <h5 class="modal-title" id="deleteModalLabel">Delete Course</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete the course?</p>
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
