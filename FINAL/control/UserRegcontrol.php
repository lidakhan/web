<?php
include '../model/db.php';


    if (isset($_POST["SUBMIT"])) {
        $seller_name  = $_POST["seller_name"];
        $email        = $_POST["email"];
        $phone_number = $_POST["phone_number"];
        $password     = $_POST["password"];
        $confirm_password  = $_POST["confirm_password"];
        $company_name      = $_POST["company_name"];
        $company_address   = $_POST["company_address"];
        $service_category  = $_POST["service_category"];
        $bus_name          = $_POST["bus_name"];
        $License_number    = $_POST["License_number"];
        $bus_type          = $_POST["bus_type"];
        $terms             = isset($_POST["terms"]) ? "clicked" : "not clicked";

        // Handle file upload
        $myfile = "";
        if (isset($_FILES["myfile"]) && $_FILES["myfile"]["error"] === 0) {
            $filename     = basename($_FILES["myfile"]["name"]);
            $target_path  = "../uploads/" . $filename;

            if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $target_path)) {
                $myfile = $filename;
            } else {
                die("Failed to upload file.");
            }
        }

        // DB connection
        $conn = Create_Conn(); 

        // Create user
        $result = CreateUser($conn, $seller_name, $email, $phone_number, $password, $confirm_password,
            $company_name, $company_address, $service_category, $bus_name,
            $License_number, $myfile, $bus_type, $terms);

        if ($result === true) {
            header("Location: ../view/Seller_login.php");
            exit(); 
        } else {
            echo "Error: " . mysqli_error($conn);
        }

        closeCon($conn);
    }

?>

