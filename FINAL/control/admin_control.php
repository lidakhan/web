<?php
include '../model/db.php';
session_start();

// conn create
$conn = Create_Conn();

//delete request
if (isset($_GET['delete_id'])) {
    $deleteId = $_GET['delete_id'];
    deleteUser($conn, $deleteId);
    // Optional: redirect to avoid re-submission
    header("Location: ../view/admin.php");
    exit();
}

// Fetch all users
$users = getAllUsers($conn);

// conn close
closeCon($conn);
?>
