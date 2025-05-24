<?php

// Create connection
function Create_Conn(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database_name = "webtech_project";
     $conn = mysqli_connect($servername, $username, $password, $database_name);
     if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $conn;
}

// Create User/registration
function CreateUser($conn, $seller_name, $email, $phone_number,$password,$confirm_password,
                    $company_name,$company_address,$service_category,$bus_name,$License_number,$myfile,
                    $bus_type,$terms){
    $querystring="INSERT INTO users 
                                   (seller_name,email, phone_number,password,confirm_password,
                                   company_name,company_address,service_category,bus_name,
                                   License_number,myfile,bus_type,terms)
                                    VALUES ('$seller_name', '$email','$phone_number','$password','$confirm_password',
                                            '$company_name','$company_address','$service_category','$bus_name','$License_number','$myfile',
                                            '$bus_type','$terms')";
    $result = mysqli_query($conn, $querystring);
    return $result;
}


// Check login
function UserLogin($conn,$seller_name,$email,$password){
    $querystring = " SELECT * FROM users WHERE seller_name = '$seller_name' and email = '$email' and password ='$password' ";
    $result = mysqli_query($conn,$querystring);
    return $result;
}


// Fetch All User
function getAllUsers($conn) {
    $query = "SELECT * FROM users";
    $result = mysqli_query($conn, $query);
    return $result;
}

// Delete single User
function deleteUser($conn, $userId) {
    $userId = mysqli_real_escape_string($conn, $userId);
    $query = "DELETE FROM users WHERE id = '$userId'";
    $result = mysqli_query($conn, $query);
    return $result;
}




// Check connection
function closeCon($conn) {
    if ($conn) {
        mysqli_close($conn);
    }
}

?>