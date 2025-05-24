<?php
include '../model/db.php';
session_start();


if (isset($_POST["SUBMIT"])) {
    $seller_name = $_POST["seller_name"];
    $email        = $_POST["email"];
    $password     = $_POST["password"];    

    // create conn
    $conn = Create_Conn(); 

    $result = UserLogin($conn,$seller_name, $email, $password);             // this function in model-db.php file

    if (mysqli_num_rows($result) > 0) {
        $_SESSION["seller_name"] = $_POST["seller_name"];
        $_SESSION["email"] = $_POST["email"];
        header("Location: ../view/profile.php");
    } else {
        echo "login failed , no user found!";
    }
    // close conn
    closeCon($conn);
}
?>

