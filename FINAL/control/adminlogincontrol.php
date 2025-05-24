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

        $input_pass = $_POST["password"] ;
        $letter_only = preg_replace("/[^a-zA-Z]/","",$input_pass);     // regular expression 

         if ($seller_name === "admin" && $letter_only === "admin") {
            header("Location: ../view/admin.php");
            exit(); 
        } else {
            header("Location: ../view/profile.php"); 
            exit();
        }

    } else {
        echo "login failed , no user found!";
    }
    // close conn
    closeCon($conn);
}
?>

