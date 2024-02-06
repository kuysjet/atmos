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
                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#addModal">
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
                                    <?php include 'database/dbconfig.php';
                                    $no                 = 1;
                                    $fetch_academicyear = mysqli_query($conn, "SELECT id, course_code, level, section FROM courses");
                                    while ($getrow = mysqli_fetch_assoc($fetch_academicyear)) { ?>
                                        <tr>
                                            <td>
                                                <?= $no ?>
                                            </td>
                                            <td>
                                                <?= $getrow['course_code'] ?>
                                            </td>
                                            <td>
                                                <?= $getrow['level'] ?>
                                            </td>
                                            <td>
                                                <?= $getrow['section'] ?>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#viewModal<?= $getrow['id'] ?>">
                                                    <i class="far fa-eye"></i>
                                                </button>
                                                <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#editModal<?= $getrow['id'] ?>">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </button>
                                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#deleteModal<?= $getrow['id'] ?>">
                                                    <i class="fas fa-trash"></i>
                                                </button>

                                                <!-- View Modal -->
                                                <div class="modal fade" id="viewModal<?= $getrow['id'] ?>" tabindex="-1"
                                                    aria-labelledby="viewModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="viewModalLabel">View Course</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <!-- Display all course information -->
                                                                <dl class="row">
                                                                    <dt class="col-sm-3">Course</dt>
                                                                    <dd class="col-sm-9" id="viewCourse">
                                                                        <?= $getrow['course_code'] ?>
                                                                    </dd>

                                                                    <dt class="col-sm-3">Level</dt>
                                                                    <dd class="col-sm-9" id="viewLevel">
                                                                        <?= $getrow['level'] ?>
                                                                    </dd>

                                                                    <dt class="col-sm-3">Section</dt>
                                                                    <dd class="col-sm-9" id="viewSection">
                                                                        <?= $getrow['section'] ?>
                                                                    </dd>

                                                                    <!-- Add more data fields as needed -->
                                                                </dl>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Edit Modal -->
                                                <div class="modal fade" id="editModal<?= $getrow['id'] ?>" tabindex="-1"
                                                    aria-labelledby="editModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="editModalLabel">Edit Course</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <!-- Edit form for a course -->
                                                                <form action="aacrud.php" method="post">
                                                                    <input type="hidden" name="course_id"
                                                                        value="<?= $getrow['id'] ?>">
                                                                    <div class="mb-3">
                                                                        <label for="editCourse"
                                                                            class="form-label">Course</label>
                                                                        <input type="text" class="form-control"
                                                                            name="edit-course" id="editCourse"
                                                                            placeholder="Enter course"
                                                                            value="<?= $getrow['course_code'] ?>">
                                                                    </div>

                                                                    <div class="mb-3">
                                                                        <label for="editLevel"
                                                                            class="form-label">Level</label>
                                                                        <input type="text" class="form-control"
                                                                            name="edit-level" id="editCourse" id="editLevel"
                                                                            placeholder="Enter level"
                                                                            value="<?= $getrow['level'] ?>">
                                                                    </div>

                                                                    <div class="mb-3">
                                                                        <label for="editSection"
                                                                            class="form-label">Section</label>
                                                                        <input type="text" class="form-control"
                                                                            name="edit-section" id="editCourse"
                                                                            id="editSection" placeholder="Enter section"
                                                                            value="<?= $getrow['section'] ?>">
                                                                    </div>

                                                                    <!-- Add more input fields as needed -->

                                                                    <!-- Save changes button -->
                                                                    <button type="submit" class="btn btn-primary"
                                                                        name="submit-edit-course">Save
                                                                        Changes</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Delete Modal -->
                                                <div class="modal fade" id="deleteModal<?= $getrow['id'] ?>" tabindex="-1"
                                                    aria-labelledby="deleteModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="deleteModalLabel">Delete
                                                                    Academic Year</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Are you sure you want to delete the course?</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary btn-sm"
                                                                    data-bs-dismiss="modal">Cancel</button>
                                                                <button type="submit" class="btn btn-danger btn-sm"
                                                                    data-bs-dismiss="modal"
                                                                    onClick="deleteme(<?= $getrow['id'] ?>)">Delete</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </td>
                                        </tr>
                                        <?php $no++;
                                    } ?>
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
        $(document).ready(function () {
            $('#coursesTable').DataTable();
        });

        function deleteme(delid) {
            window.location.href = 'aacrud.php?del-course=' + delid + '';
            return true;
        }
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
                    <form action="aacrud.php" method="post">
                        <!-- Example input fields -->
                        <div class="mb-3">
                            <label for="course" class="form-label">Course</label>
                            <input type="text" class="form-control" name="course" id="course"
                                placeholder="Enter course">
                        </div>

                        <div class="mb-3">
                            <label for="level" class="form-label">Level</label>
                            <input type="text" class="form-control" name="level" id="level" placeholder="Enter level">
                        </div>

                        <div class="mb-3">
                            <label for="section" class="form-label">Section</label>
                            <input type="text" class="form-control" name="section" id="section"
                                placeholder="Enter section">
                        </div>
                        <!-- Add more input fields as needed -->

                        <!-- Add submit button -->
                        <button type="submit" name="add-courses" class="btn btn-primary">Add Course</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


</body>

</html>