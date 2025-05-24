<?php
include '../model/db.php';

// conn create
$conn = Create_Conn();

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = mysqli_real_escape_string($conn, $_POST['seller_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    $sql = "UPDATE users SET seller_name = '$name', email = '$email' WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        echo "User updated successfully.<br>";
        echo "<a href='../view/admin.php'>Back to Admin Page</a>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // conn close
    closeCon($conn);
}
?>
