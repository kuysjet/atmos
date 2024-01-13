<?php include 'database/dbconfig.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize the input
    if (isset($_POST['academicStatus'])) {
        $academicYearStatus = mysqli_real_escape_string($conn, $_POST['academicStatus']);
        $primaryId          = mysqli_real_escape_string($conn, $_POST['primaryId']);

        // Insert the academic year into the database
        $sql = "UPDATE academic_year SET status = $academicYearStatus WHERE id = $primaryId";

        if ($conn->query($sql) === TRUE) {
            header("Location: academic_year.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Academic year not provided";
    }
}

// Close the database connection
$conn->close();