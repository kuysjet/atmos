<?php
include 'database/dbconfig.php';

$del = $_GET['del'];

mysqli_query($conn, "DELETE FROM academic_year WHERE id = '$del' ");
header('location: academic_year.php');
?>