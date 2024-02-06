<?php include 'database/dbconfig.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // academic year add
    if (isset($_POST['year-add'])) {
        $academicYear = mysqli_real_escape_string($conn, $_POST['academicYear']);

        // Insert the academic year into the database
        $sql = "INSERT INTO academic_year (year) VALUES ('$academicYear')";

        if ($conn->query($sql) === TRUE) {
            header("Location: academic_year.php");
        }
    }
    // academic year update status
    if (isset($_POST['update-status'])) {
        $academicYearStatus = mysqli_real_escape_string($conn, $_POST['academicStatus']);
        $primaryId          = mysqli_real_escape_string($conn, $_POST['primaryId']);

        // Insert the academic year into the database
        $sql = "UPDATE academic_year SET status = $academicYearStatus WHERE id = $primaryId";

        if ($conn->query($sql) === TRUE) {
            header("Location: academic_year.php");
        }
    }
    // courses.php add
    if (isset($_POST['add-courses'])) {
        $course  = mysqli_real_escape_string($conn, $_POST['course']);
        $level   = mysqli_real_escape_string($conn, $_POST['level']);
        $section = mysqli_real_escape_string($conn, $_POST['section']);

        // Insert the user's input into the database
        $sql = "INSERT INTO courses (course, course_code, level, section) VALUES ('$course', '$course', '$level', '$section')";

        if ($conn->query($sql) === TRUE) {
            header("Location: courses.php");
        }
    }
    // course.php edit
    if (isset($_POST['submit-edit-course'])) {
        $id           = mysqli_real_escape_string($conn, $_POST['course_id']);
        $edit_course  = mysqli_real_escape_string($conn, $_POST['edit-course']);
        $edit_level   = mysqli_real_escape_string($conn, $_POST['edit-level']);
        $edit_section = mysqli_real_escape_string($conn, $_POST['edit-section']);

        // Insert the user's input into the database
        $sql = "UPDATE courses SET course = '$edit_course', course_code = '$edit_course', level = '$edit_level', section = '$edit_section' WHERE id = $id";

        if ($conn->query($sql) === TRUE) {
            header("Location: courses.php");
        }
    }

}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // academic year delete
    if (isset($_GET['del'])) {

        $del = $_GET['del'];

        $sql = "DELETE FROM academic_year WHERE id = '$del' ";

        if ($conn->query($sql) === TRUE) {
            header("Location: academic_year.php");
        }
    }
    // courses delete
    if (isset($_GET['del-course'])) {

        $del = $_GET['del-course'];

        $sql = "DELETE FROM courses WHERE id = '$del' ";

        if ($conn->query($sql) === TRUE) {
            header("Location: courses.php");
        }
    }

}


// Close the database connection
$conn->close();