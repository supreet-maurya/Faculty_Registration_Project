<?php
// Start session to access session variables
session_start();

// Check if user is logged in
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    // Database connection parameters
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "faculty"; // Change this to your database name

    // Create connection
    $conn = mysqli_connect($server, $username, $password, $database);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Retrieve email of the logged-in user
    $email = $_SESSION['email'];

    // Check if all required fields are set
    if (isset($_POST['current_password'], $_POST['new_password'], $_POST['confirm_password'])) {
        $current_password = $_POST['current_password'];
        $new_password = $_POST['new_password'];
        $confirm_password = $_POST['confirm_password'];

        // Validate current password against database
        $sql = "SELECT PASSWORD FROM `registration` WHERE `EMAIL` = '$email'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            $stored_password = $row['PASSWORD'];

            // Verify current password
            if ($current_password === $stored_password) {
                // Check if new password matches the confirmation
                if ($new_password === $confirm_password) {
                    // Update password in the database
                    $update_sql = "UPDATE `registration` SET PASSWORD = '$new_password' WHERE `EMAIL` = '$email'";
                    if (mysqli_query($conn, $update_sql)) {
                        echo "Password updated successfully!";
                    } else {
                        echo "Error updating password: " . mysqli_error($conn);
                    }
                } else {
                    echo "New password and confirm password do not match!";
                }
            } else {
                echo "Current password is incorrect!";
            }
        } else {
            echo "User not found!";
        }
    } else {
        echo "All fields are required!";
    }

    // Close connection
    mysqli_close($conn);
} else {
    // Redirect user to login page if not logged in
    header("Location: welcome.php");
    exit();
}
?>
