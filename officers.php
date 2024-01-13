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
        <h2>Officers</h2>
          <div class="card header card-outline card-primary m-0 p-3">
            <!-- Add button with icon -->
            <div class="d-flex justify-content-end mb-0 ">
              <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addModal">
                <i class="fas fa-plus"></i> Add Officer
              </button>
            </div>
          </div>
          <div class="card body p-3">
          <div class="table-responsive">
            <table id="officersTable" class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Position</th>
                        <th class="d-none">Username</th>
                        <th class="d-none">Password</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>James</td>
                        <td>Smith</td>
                        <td>Senator</td>
                        <td class="d-none">jamessmith</td>
                        <td class="d-none">jamessmith123</td>
                        <td><span class="badge bg-primary">Active</span></td>
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
        $('#officersTable').DataTable();
    });
</script>


<!-- Add Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Add Officer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Add your form or input fields for adding an officer here -->
                    <form>
                        <!-- Example input fields -->
                        <div class="mb-3">
                            <label for="firstName" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="firstName" placeholder="Enter first name">
                        </div>

                        <div class="mb-3">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lastName" placeholder="Enter last name">
                        </div>

                        <div class="mb-3">
                            <label for="position" class="form-label">Position</label>
                            <input type="text" class="form-control" id="position" placeholder="Enter position">
                        </div>

                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" placeholder="Enter username">
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter password">
                        </div>

                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select" id="status">
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
                            </select>
                        </div>

                        <!-- Add submit button -->
                        <button type="submit" class="btn btn-primary">Add Officer</button>
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
                <h5 class="modal-title" id="viewModalLabel">View Officer</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Display all officer information -->
                <form>
                    <div class="mb-3 row">
                        <label for="viewFirstName" class="col-sm-3 col-form-label">First Name</label>
                        <div class="col-sm-9">
                            <input type="text" readonly class="form-control-plaintext" id="viewFirstName" value="James">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="viewLastName" class="col-sm-3 col-form-label">Last Name</label>
                        <div class="col-sm-9">
                            <input type="text" readonly class="form-control-plaintext" id="viewLastName" value="Smith">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="viewPosition" class="col-sm-3 col-form-label">Position</label>
                        <div class="col-sm-9">
                            <input type="text" readonly class="form-control-plaintext" id="viewPosition" value="Senator">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="viewUsername" class="col-sm-3 col-form-label">Username</label>
                        <div class="col-sm-9">
                            <input type="text" readonly class="form-control-plaintext" id="viewUsername" value="jamessmith">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="viewPassword" class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-9">
                            <input type="text" readonly class="form-control-plaintext" id="viewPassword" value="jamessmith123">
                        </div>
                    </div>
                    <!-- Add more form fields as needed -->
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
                    <h5 class="modal-title" id="editModalLabel">Edit Officer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Edit form for an officer -->
                    <form>
                        <div class="mb-3">
                            <label for="editFirstName" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="editFirstName" placeholder="Enter first name" value="James">
                        </div>

                        <div class="mb-3">
                            <label for="editLastName" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="editLastName" placeholder="Enter last name" value="Smith">
                        </div>

                        <div class="mb-3">
                            <label for="editPosition" class="form-label">Position</label>
                            <input type="text" class="form-control" id="editPosition" placeholder="Enter position" value="Senator">
                        </div>

                        <div class="mb-3">
                            <label for="editUsername" class="form-label">Username</label>
                            <input type="text" class="form-control" id="editUsername" placeholder="Enter username" value="jamessmith">
                        </div>

                        <div class="mb-3">
                            <label for="editPassword" class="form-label">Password</label>
                            <input type="text" class="form-control" id="editPassword" placeholder="jamessmith">
                        </div>

                        <div class="mb-3">
                            <label for="editStatus" class="form-label">Status</label>
                            <select class="form-select" id="editStatus">
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
                            </select>
                        </div>

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
                    <h5 class="modal-title" id="deleteModalLabel">Delete Officer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete the officer?</p>
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
