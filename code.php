<?php
session_start();

include 'database/dbconfig.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query to find the user
    $query = "SELECT * FROM users WHERE usn = '$username'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        

        if ($password == $user['password']) {
            // Get user role
            $userTypeId = $user['user_type_id'];
            $roleQuery = "SELECT * FROM user_types WHERE id = $userTypeId";
            $roleResult = mysqli_query($conn, $roleQuery);
            $roleRow = mysqli_fetch_assoc($roleResult);

            // Redirect based on role
            switch ($roleRow['user']) {
                case 'Administrator':
                    header('Location: admin_dashboard.php');
                    break;
                case 'Registrar':
                    header('Location: registrar_dashboard.php');
                    break;
                case 'Student':
                    header('Location: student_dashboard.php');
                    break;
            }
        } else {
            echo "<script>alert('Invalid password.'); window.location.href='login.php';</script>";

        }
    } else {
        echo "<script>alert('User not found.'); window.location.href='login.php';</script>";
    }
}
?>
