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
        <h2>Events</h2>

          <div class="card header card-outline card-primary m-0 p-3">
            <!-- Add button with icon -->
            <div class="d-flex justify-content-end mb-0 ">
              <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addEventModal">
                  <i class="fas fa-plus"></i> Add Event
              </button>
            </div>
          </div>
          <div class="card body p-3">
          <div class="table-responsive">
          <table id="eventTable" class="table table-hover table-bordered">
              <thead>
                  <tr>
                      <th>#</th>
                      <th>Academic Year</th>
                      <th>Event Name</th>
                      <th>Venue</th>
                      <th>Start Date & Time</th>
                      <th>End Date & Time</th>
                      <th class="d-none">Description</th>
                      <th>Status</th>
                      <th>Actions</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>1</td>
                      <td>2023-2024</td>
                      <td>Annual Gala</td>
                      <td>Convention Center</td>
                      <td>12-15-2023 09:00 am</td>
                      <td>12-15-2023 05:00:pm</td>
                      <td class="d-none">A night of celebration and joy</td>
                      <td><span class="badge bg-primary">On-Going</span></td>
                      <td>
                          <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#viewEventModal">
                              <i class="far fa-eye"></i>
                          </button>
                          <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editEventModal">
                              <i class="fas fa-pencil-alt"></i>
                          </button>
                          <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteEventModal">
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
        $('#eventTable').DataTable();
    });
</script>


<!-- Add Event Modal -->
<div class="modal fade" id="addEventModal" tabindex="-1" aria-labelledby="addEventModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addEventModalLabel">Add Event</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3">
                    <!-- Academic Year Dropdown -->
                    <div class="mb-3 col-md-6">
                        <label for="academicYear" class="form-label">Academic Year</label>
                        <select class="form-select" id="academicYear">
                            <option selected disabled>Select Academic Year</option>
                            <option value="2023-2024">2023-2024</option>
                            <!-- Add more academic years as needed -->
                        </select>
                    </div>
                    <!-- End of Academic Year Dropdown -->

                    <div class="mb-3 col-md-6">
                        <label for="eventName" class="form-label">Event Name</label>
                        <input type="text" class="form-control" id="eventName" placeholder="Enter event name">
                    </div>

                    <!-- Event Venue in a single row -->
                    <div class="mb-3 col-12">
                        <label for="venue" class="form-label">Event Venue</label>
                        <input type="text" class="form-control" id="venue" placeholder="Enter event venue">
                    </div>
                    <!-- End of Event Venue in a single row -->

                    <div class="mb-3 col-md-6">
                        <label for="startDate" class="form-label">Start Date & Time</label>
                        <input type="datetime-local" class="form-control" id="startDate">
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="endDate" class="form-label">End Date & Time</label>
                        <input type="datetime-local" class="form-control" id="endDate">
                    </div>

                    <div class="mb-3 col-12">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" rows="3" placeholder="Enter event description"></textarea>
                    </div>

                    <div class="mb-3 col-12">
                        <label for="assignedOfficers" class="form-label">Assigned Officers</label>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="assignedOfficersDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Select Officers
                            </button>
                            <div class="dropdown-menu scrollable-menu" aria-labelledby="assignedOfficersDropdown">
                                <!-- Add more officers as needed -->
                                <div class="form-check ml-3">
                                    <input class="form-check-input" type="checkbox" value="Officer1" id="officer1Checkbox">
                                    <label class="form-check-label" for="officer1Checkbox">
                                        James Smith
                                    </label>
                                </div>
                                <div class="form-check ml-3">
                                    <input class="form-check-input" type="checkbox" value="Officer2" id="officer2Checkbox">
                                    <label class="form-check-label" for="officer2Checkbox">
                                        Officer One
                                    </label>
                                </div>
                                <!-- Add more officers as needed -->
                                <div class="form-check ml-3">
                                    <input class="form-check-input" type="checkbox" value="Officer1" id="officer1Checkbox">
                                    <label class="form-check-label" for="officer1Checkbox">
                                        Officer Two
                                    </label>
                                </div>
                                <div class="form-check ml-3">
                                    <input class="form-check-input" type="checkbox" value="Officer2" id="officer2Checkbox">
                                    <label class="form-check-label" for="officer2Checkbox">
                                        Officer Three
                                    </label>
                                </div>
                                <!-- Add more checkboxes for officers as needed -->
                                <!-- ... -->
                                <!-- Add more checkboxes for officers as needed -->
                            </div>
                        </div>
                    </div>

                    <div class="col-12 text-end">
                        <button type="submit" class="btn btn-primary">Add Event</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- View Event Modal -->
<div class="modal fade" id="viewEventModal" tabindex="-1" aria-labelledby="viewEventModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewEventModalLabel">View Event Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Academic Year:</label>
                                    <span class="d-block">2023-2024</span>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Event Name:</label>
                                    <span class="d-block">Annual Gala</span>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Event Venue:</label>
                                    <span class="d-block">Convention Center</span>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Start Date & Time:</label>
                                    <span class="d-block">01-14-2024 09:00 am</span>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">End Date & Time:</label>
                                    <span class="d-block">01-14-2024 05:00 pm</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Description:</label>
                                    <span class="d-block">A night of celebration and joy</span>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Assigned Officers:</label>
                                    <ul>
                                        <li>James Smith</li>
                                        <li>Officer One</li>
                                        <!-- Add more officers as needed -->
                                        <li>Officer Two</li>
                                        <li>Officer Three</li>
                                        <!-- ... -->
                                        <!-- Add more officers as needed -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




<!-- Edit Event Modal -->
<div class="modal fade" id="editEventModal" tabindex="-1" aria-labelledby="editEventModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editEventModalLabel">Edit Event</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3">
                    <div class="mb-3 col-md-6">
                        <label for="editAcademicYear" class="form-label">Academic Year</label>
                        <input type="text" class="form-control" id="editAcademicYear" value="2022-2023">
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="editEventName" class="form-label">Event Name</label>
                        <input type="text" class="form-control" id="editEventName" value="Annual Gala">
                    </div>

                    <div class="mb-3 col-md-12">
                        <label for="editVenue" class="form-label">Event Venue</label>
                        <input type="text" class="form-control" id="editVenue" value="Convention Center">
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="editStartDate" class="form-label">Start Date & Time</label>
                        <input type="datetime-local" class="form-control" id="editStartDate" value="2024-01-14T09:00">
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="editEndDate" class="form-label">End Date & Time</label>
                        <input type="datetime-local" class="form-control" id="editEndDate" value="2024-01-14T17:00">
                    </div>

                    <div class="mb-3 col-12">
                        <label for="editDescription" class="form-label">Description</label>
                        <textarea class="form-control" id="editDescription" rows="3">A night of celebration and joy</textarea>
                    </div>

                    <div class="mb-3 col-12">
                        <label for="editAssignedOfficers" class="form-label">Assigned Officers</label>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="editAssignedOfficersDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Select Officers
                            </button>
                            <div class="dropdown-menu scrollable-menu" aria-labelledby="editAssignedOfficersDropdown">
                                <!-- Add more officers as needed -->
                                <div class="form-check ml-3">
                                    <input class="form-check-input" type="checkbox" value="Officer1" id="editOfficer1Checkbox">
                                    <label class="form-check-label" for="editOfficer1Checkbox">
                                        James Smith
                                    </label>
                                </div>
                                <div class="form-check ml-3">
                                    <input class="form-check-input" type="checkbox" value="Officer2" id="editOfficer2Checkbox">
                                    <label class="form-check-label" for="editOfficer2Checkbox">
                                        Officer One
                                    </label>
                                </div>
                                <!-- Add more officers as needed -->
                                <div class="form-check ml-3">
                                    <input class="form-check-input" type="checkbox" value="Officer1" id="editOfficer1Checkbox">
                                    <label class="form-check-label" for="editOfficer1Checkbox">
                                        Officer Two
                                    </label>
                                </div>
                                <div class="form-check ml-3">
                                    <input class="form-check-input" type="checkbox" value="Officer2" id="editOfficer2Checkbox">
                                    <label class="form-check-label" for="editOfficer2Checkbox">
                                        Officer Three
                                    </label>
                                </div>
                                <!-- Add more checkboxes for officers as needed -->
                                <!-- ... -->
                                <!-- Add more checkboxes for officers as needed -->
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 col-12 text-end">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Delete Event Modal -->
<div class="modal fade" id="deleteEventModal" tabindex="-1" aria-labelledby="deleteEventModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteEventModalLabel">Delete Event</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this event?</p>
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
