<?php include "includes/header.php" ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

<<<<<<< HEAD
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/amalogo.png" alt="ACLC LOGO" height="130" width="100">
        </div>
=======
  <!-- Preloader -->
  <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/amalogo.png" alt="ACLC LOGO" height="130" width="100">
  </div> -->
>>>>>>> 1dd75f858240911e9b26eb0abbcf4b6369e3e506

        <?php include "includes/navbar-sidebar.php" ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">


            <div class="main p-3">
                <div id="content" class="container">
                    <!-- Your page content goes here -->
                    <h2>Academic Year</h2>

                    <div class="card header card-outline card-primary m-0 p-3">
                        <!-- Add button with icon -->
                        <div class="d-flex justify-content-end mb-0 ">
                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#addModal">
                                <i class="fas fa-plus"></i> Add Academic Year
                            </button>
                        </div>
                    </div>
                    <div class="card body p-3">
                        <div class="table-responsive">
                            <table id="academicTable" class="table table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Academic Year</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php include 'database/dbconfig.php';
                                    $no                 = 1;
                                    $fetch_academicyear = mysqli_query($conn, "SELECT id, year FROM academic_year");
                                    while ($getrow = mysqli_fetch_assoc($fetch_academicyear)) { ?>
                                        <tr>
                                            <td>
                                                <?= $no ?>
                                            </td>
                                            <td>
                                                <?= $getrow['year'] ?>
                                            </td>
                                            <td>
                                                <?php if ($getrow['status'] == 0) {
                                                    echo "<button type='button' class='border-0 bg-transparent' data-bs-toggle='modal'
                                                    data-bs-target='#confirmChangeStatus" . $getrow['status'] . "'>
                                                    <span class='badge bg-danger'>
                                                        Pending
                                                    </span>
                                                    </button>";
                                                } elseif ($getrow['status'] == 1) {
                                                    echo "<button type='button' class='border-0 bg-transparent' data-bs-toggle='modal'
                                                    data-bs-target='#confirmChangeStatus" . $getrow['status'] . "'>
                                                    <span class='badge bg-primary'>
                                                        Active
                                                    </span>
                                                    </button>";
                                                }
                                                ?>

                                                <div class="modal fade" id="confirmChangeStatus<?= $getrow['status'] ?>"
                                                    data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <form action="academic_year-status.php" method="post">
                                                                <div class="modal-header">
                                                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">
                                                                        Confirm Changes
                                                                    </h1>
                                                                    <input type="hidden" name="academicStatus"
                                                                        value="<?= $getrow['status'] ?>">
                                                                    <input type="hidden" name="primaryId"
                                                                        value="<?= $getrow['id'] ?>">
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="fs-4">Are you sure to change the status?
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">CANCEL</button>
                                                                    <button type="submit"
                                                                        class="btn btn-primary">CONFIRM</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#editModal">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </button>
                                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#deleteModal">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    <?php } ?>
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

    <!-- Your custom script for DataTable initialization -->
    <script>
        $(document).ready(function () {
            $('#academicTable').DataTable();
        });
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
                    <form action="academic_year-add.php" method="post">
                        <!-- Example input field -->
                        <select class="form-select mb-3" name="academicYear" aria-label="Default select example">
                            <option selected disabled>Choose Academic Year</option>
                            <?php $currentYear = date("Y", strtotime('-1 year'));
                            $nextYear    = date("Y");
                            for ($a = 1; $a <= 5; $a++) { ?>
                                <option value="<?= $currentYear . "-" . $nextYear ?>">
                                    <?= $currentYear . "-" . $nextYear ?>
                                </option>
                                <?php $currentYear++;
                                $nextYear++;
                            } ?>
                        </select>
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
                            <input type="text" class="form-control" id="editAcademicYear"
                                placeholder="Enter academic year" value="2022-2023">
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