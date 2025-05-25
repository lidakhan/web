<?php
include '../model/db.php';

$conn = Create_Conn();

if (isset($_POST['update'])) {
    $id    = $_POST['id'];
    $name  = mysqli_real_escape_string($conn, $_POST['seller_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $image = "";

    // Image validation
    if (isset($_FILES["myfile"]) && $_FILES["myfile"]["error"] === 0) {
        $fileTmp   = $_FILES["myfile"]["tmp_name"];
        $fileName  = basename($_FILES["myfile"]["name"]);
        $fileSize  = $_FILES["myfile"]["size"];
        $fileType  = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        $allowedTypes = ["jpg", "jpeg", "png"];
        $maxSize = 2 * 1024 * 1024; // 2MB

        if (!in_array($fileType, $allowedTypes)) {
            echo "Only JPG, JPEG, and PNG files are allowed.<br>";
            exit;
        }

        if ($fileSize > $maxSize) {
            echo "File size should be less than 2MB.<br>";
            exit;
        }

        $targetPath = "../uploads/" . $fileName;

        if (move_uploaded_file($fileTmp, $targetPath)) {
            $image = $fileName;
        } else {
            echo "Image upload failed.<br>";
            exit;
        }
    }

    // SQL query with or without image
    if (!empty($image)) {
        $sql = "UPDATE users SET seller_name = '$name', email = '$email', myfile = '$image' WHERE id = $id";
    } else {
        $sql = "UPDATE users SET seller_name = '$name', email = '$email' WHERE id = $id";
    }

    if (mysqli_query($conn, $sql)) {
        echo "User updated successfully.<br>";
        echo "<a href='../view/admin.php'> Back to Admin Page</a>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    closeCon($conn);
}
?>

