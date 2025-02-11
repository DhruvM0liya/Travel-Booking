<?php
session_start();
include 'conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['pwd'];

    // Prepare a SQL statement using placeholders
    $query = "SELECT * FROM Registration WHERE email = ?";

    // Prepare the statement
    $stmt = mysqli_prepare($con, $query);

    // Bind parameters
    mysqli_stmt_bind_param($stmt, "s", $email);

    // Execute the statement
    mysqli_stmt_execute($stmt);

    // Get the result
    $result = mysqli_stmt_get_result($stmt);

    // Check if there is at least one row returned
    if ($row = mysqli_fetch_assoc($result)) {
        // Verify password
        if (password_verify($password, $row['pwd'])) {
            // Password is correct, set session variables and redirect
            $_SESSION['email'] = $row['email'];
            $_SESSION['pwd'] = $row['pwd'];
            header("Location: home.php");
            exit();
        } else {
            // Incorrect password
            $_SESSION['error'] = "Incorrect password.";
            header("Location: home.php");
            exit();
        }
    } else {
        // User not found
        $_SESSION['error'] = "User not found.";
        header("Location: home.php");
        exit();
    }
}
?>
