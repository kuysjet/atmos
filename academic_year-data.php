<?php

include 'database/dbconfig.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database
$sql    = "SELECT year FROM academic_year";
$result = $conn->query($sql);

// Check if there is data
if ($result->num_rows > 0) {
    $data = array();

    // Fetch data as an associative array
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    // Output data as JSON
    header('Content-Type: application/json');
    echo json_encode($data);
} else {
    // No data found
    echo "No data found";
}

// Close the connection
$conn->close();

?>