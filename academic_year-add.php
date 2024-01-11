<?php include 'database/dbconfig.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize the input
    if (isset($_POST['academicYear'])) {
        $academicYear = mysqli_real_escape_string($conn, $_POST['academicYear']);

        // Insert the academic year into the database
        $sql = "INSERT INTO academic_year (year) VALUES ('$academicYear')";

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