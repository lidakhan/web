<?php
// For Seller Name
function Namevalidate(){
$Sname = "";
if(isset($_REQUEST['SUBMIT'])){
    if(empty($_REQUEST['seller_name'])){
       return $Sname =  "Name is required!";
    }else if(strlen($_REQUEST['seller_name']) <= 3){
        return $Sname =  "Name is too short give more than 3 charecter!";
    }else{
        return  $Sname = $_REQUEST['seller_name'];
    }
}
 return "";
}
// For Email
function EmailValidate(){
    $Email = "";
    if(isset($_REQUEST['SUBMIT'])){
        if(empty($_REQUEST['email'])){
            return $Email = "Email is required";
        }else if(strpos($_REQUEST['email'] ?? '' , "@") === false || strpos($_REQUEST['email'] ?? '',".com") === false){
            return $Email = "Invalid email: must contain '@' and '.com'";
        }else if(strpos($_REQUEST['email'] ?? '' , "@") > strpos($_REQUEST['email'] ?? '' , ".com")){
            return $Email = "Invalid email: must contain '@' and '.com'";
        }else{
            return $Email = $_REQUEST['email'];
        }
    }
 return "";
}
// For Phone Number
function PhoneValidate(){
    $Phone_number = "";
    if(isset($_REQUEST['SUBMIT'])){
        if(empty($_REQUEST['phone_number'])){
            return $Phone_number = "Phone Number is required";
        }else if(!preg_match('/^01\d{9}$/', $_REQUEST['phone_number'])){ 
            return $Phone_number = "Invalid Phone Number: must have 11 digits";
        }else{
            return $Phone_number = $_REQUEST['phone_number'];
        }
    }
 return "";
}
// For Password
function PasswordValidate(){
    $Password = "";
    if(isset($_REQUEST['SUBMIT'])){
        if(empty($_REQUEST['password'])){
            return $Password = "Password is required";
        }else if(strlen($_REQUEST['password']) <= 6){
            return $Password = "Password should be more than 6 charecters!";
        }else if(!preg_match('/^(?=.*[A-Za-z])(?=.*\d)(?=.*[^A-Za-z\d]).{7,}$/', $_REQUEST['password'])){ 
            return $Password = "Password should digits,letter and special charecters!";
        }else{
            return $Password = $_REQUEST['password'];
        }
    }
 return "";
}
// For Confirm Password
function Confirm_PasswordValidate(){
    $Conf_Password = "";
    if(isset($_REQUEST['SUBMIT'])){
        if(empty($_REQUEST['confirm_password'])){
            return $Conf_Password = "Confirm Password is required";
        }else if(strcmp($_REQUEST['password'], $_REQUEST['confirm_password']) !== 0){ // return 0 , if both string are equal 
            return $Conf_Password = "Confirm Password is not match!";
        }else{
            return $Conf_Password = $_REQUEST['confirm_password'];
        }
    }
 return "";
}
// For company name
function Company_Name(){
    $Company_name = "";
    if(isset($_REQUEST['SUBMIT'])){
        if(empty($_REQUEST['company_name'])){
            return $Company_name = "Company name is required";
        }else{
            return $Company_name = $_REQUEST['company_name'];
        }
    }
 return "";
}
// For company Address
function Company_address(){
    $Company_add = "";
    if(isset($_REQUEST['SUBMIT'])){
        if(empty($_REQUEST['company_address'])){
            return $Company_add = "Company Address is required";
        }else{
            return $Company_add = $_REQUEST['company_address'];
        }
    }
 return "";
}
// For Service select
function Service_Catagory(){
    $Service = "";
    if(isset($_REQUEST['SUBMIT'])){
        if(!isset($_REQUEST['service_category']) || empty($_REQUEST['service_category'])){
            return "You must choose Services!";
        } else{
            return $Service =  $_REQUEST['service_category'];
        }
    }
 return "";
}
// For Bus name
function Bus_Name(){
    $Bus_name = "";
    if(isset($_REQUEST['SUBMIT'])){
        if(empty($_REQUEST['bus_name']) ){
            return $Bus_name = "Bus Name is required!";
        } else if(!preg_match("/^[A-Za-z]{3,}$/", $_REQUEST['bus_name'])){   // only letter and more that 3 char 
            return $Bus_name =  "Bus name should only letter and  more than 3 char!";
        }else{
            return $Bus_name = $_REQUEST['bus_name'];
        }
    }
 return "";
}
// For License Number
function License_number(){
    $license = "";
    if(isset($_REQUEST['SUBMIT'])){
        if(empty($_REQUEST['License_number']) ){
            return $license = "License is required!";
        } else if(!preg_match("/^\d{5,}$/", $_REQUEST['License_number'])){    // only digits and at least 5 
            return $license =  "License should be digits and at least 5 digits!";
        }else{
            return $license = $_REQUEST['License_number'];
        }
    }
 return "";
}
// For Type of buses (radio button)
function Bus_type(){
    $Bustype = "";
    if(isset($_REQUEST['SUBMIT'])){
        if(empty($_REQUEST['bus_type']) || !isset($_REQUEST['bus_type']) ){
            return $Bustype = "Choose Bus Type!";
        }else{
            return $Bustype = $_REQUEST['bus_type'];
        }
    }
 return "";
}
// For Terms and condition(checkbox)
function Terms_Condition(){
    $terms = "";
    if(isset($_REQUEST['SUBMIT'])){
        if(!isset($_REQUEST['terms']) ){
            return $terms = "Confirm Terms and Condition !";
        }else{
            return $terms = "Checkbox Clicked";
        }
    }
 return "";
}

// For file handing
function file_handle(){
    $msg = "";
    if(isset($_REQUEST['SUBMIT'])){
        if(move_uploaded_file($_FILES["myfile"]["tmp_name"],"../uploads/".$_FILES["myfile"]["name"])){
            return $msg = "File uploaded !";
        }else{
            return $msg = "File not found !";
        }
    }
 return "";
}




?>