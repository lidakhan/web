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
?>