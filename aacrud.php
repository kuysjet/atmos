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

}


// Close the database connection
$conn->close();