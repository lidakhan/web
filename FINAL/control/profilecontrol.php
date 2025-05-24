<?php
include '../model/db.php'; 
session_start();

// Check if user is logged in
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}


$conn = Create_Conn();
// Sanitize email from session
$email = mysqli_real_escape_string($conn, $_SESSION['email']);
$sql = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
} else {
    echo "No user found or database error: " . mysqli_error($conn);
    exit();
}

// Close the connection 
closeCon($conn);
