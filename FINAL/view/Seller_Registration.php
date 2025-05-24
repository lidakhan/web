<?php
include "../control/validation.php";
include "../control/UserRegcontrol.php";
$Sname = Namevalidate();
$Email = EmailValidate();
$Phone_num = PhoneValidate();
$password = PasswordValidate();
$conf_pass = Confirm_PasswordValidate();
$company_name = Company_Name();
$company_add = Company_address();
$services = Service_Catagory();
$bus_name = Bus_Name();
$license = License_number();
$bus_type = Bus_type();
$terms = Terms_Condition();
$file = file_handle();
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Registation</title>
    <link rel="stylesheet" href="sellers.css">
     
</head>
<body>
   



<div class="form-container">
<h1 >Ticket Seller Registation</h1><br>
    
    <form method="post" action="" enctype="multipart/form-data">
                
            <div class="box1">
                
                    <h3 style="color:red"><label>Seller Information</label></h3>
                        <table>
                            <tr>
                                <th align="left">Seller Name:</th>
                                <td class="field-group">
                                    <input type="text" name="seller_name" id="S_name" placeholder="Kaushik"> <span style="color:red"><?php echo "$Sname" ?></span>

                                </td> 
                            </tr>
                            <tr>
                                <th align="left">Email Address:</th>
                                <td>
                                    <input type="text" name="email" id="email" placeholder="user@gmail.com"> <span style="color:red" id="two"><?php echo "$Email" ?></span>
                                </td>
                            </tr>
                            <tr>
                                <th align="left">Phone Number:</th>
                                <td>
                                    <input type="text" name="phone_number" id="PH_num" placeholder="019********"> <span style="color:red" id="three"><?php echo "$Phone_num" ?></span>
                                </td>
                            </tr>
                            <tr>
                                <th align="left">Password:</th>
                                <td>
                                    <input type="password" name="password" id="Pass" placeholder="abcd1$&"> <span style="color:red" id="four"><?php echo "$password"?></span>
                                </td>
                            </tr>
                            <tr>
                                <th align="left">Confirm Password:</th> 
                                <td>
                                    <input type="password" name="confirm_password" id="Conf_pass" placeholder="abcd1$&"> <span style="color:red" id="five"><?php echo"$conf_pass" ?></span>
                                </td>
                            </tr>
                        </table>
                
            </div>

            <br>

            <div class="box2">
                
            <h3 style="color:red"> <label>Company Details</label>  </h3>
                    <table>
                        <tr>
                            <th align="left">Company Name:</th>
                            <td>
                                <input type="text" name="company_name" id="Com_name" placeholder="SuperBlock or tigerIT"> <span style="color:red" id="six"><?php echo"$company_name"?></span>
                            </td>
                        </tr>
                        <tr>
                            <th align="left">Company Address:</th>
                            <td>
                                <input type="text" name="company_address" id="Com_add" placeholder="Kuril,Dhaka,1210"> <span style="color:red" id="seven"><?php echo"$company_add"?></span>
                            </td>
                        </tr>
                        <tr>
                            <th align="left">Type of Service:</th>
                            <td>
                                    <select id="Serv_Cat" name="service_category">
                                        <option value="">-- Select Service --</option>
                                        <option value="Personal">Personal</option>
                                        <option value="Group Tour">Group Tour</option>
                                        <option value="Family">Family</option>
                                        <option value="School">School</option>
                                        <option value="Corporate">Corporate</option>
                                    </select>
                                <span style="color:red" id="eight"><?php echo"$services"?></span>

                            </td>
                        </tr>
                    
                    </table>
                
            <div>
            <br>

                <div class="box3">
                
                    <h3 style="color:red"> <label>Business Details</label></h3>
                    <table>
                        <tr>
                            <th align="left">Bus Name:</th>
                            <td>
                                <input type="text" name="bus_name" id="Bus_name" placeholder="Bus Poribhohon"> <span style="color:red" id="nine"><?php echo"$bus_name"?></span>
                            </td>
                        </tr>
                
                        <tr>
                            <th align="left">License Number:</th>
                            <td>
                                <input type="text" name="License_number" id="Lic_num" placeholder="9645878521"> <span style="color:red" id="ten"><?php echo"$license"?></span>
                            </td>
                        </tr>
                        <tr>
                            <th align="left">Upload Bus Documents:</th>
                            <td>
                                <input type="file" name="myfile" id="busi_doc" multiple > <span style="color:red" id="ten"><?php echo"$file"?></span>
                            </td>
                        </tr>
                        <tr>
                            <th align="left">Type of Buses:</th>
                            <td>
                                <input type="radio" name="bus_type" value='AC'>AC 
                                <input type="radio" name="bus_type" value='Non AC'>Non AC
                                <input type="radio" name="bus_type" value='Sleeper'>Sleeper
                                <input type="radio" name="bus_type" value='Luxury'>Luxury 
                                
                                <span style="color:red" id="twelve"><?php echo"$bus_type"?></span>
                            </td>
                            
                        
                        </tr>
                        <tr>
                            <!-- <th align="left">Registation Date:</th>
                            <td>
                                <input type="date" name="registation_date">
                            </td> -->
                        </tr>
                    </table>
            
            </div>

            <table>
                <tr>
                    <th align="left">Agree to Terms & Conditions:</th>
                    <td>
                        <input type="checkbox" name="terms" id="Terms" > I agree to the <a href="">Terms & Conditions</a> 
                        <span style="color:red" id="thirteen"><?php echo"$terms"?></span>
                    </td>
                    
                </tr>
            </table>
            <br>
            <table>
                <tr>
                    <td align="left">
                        <input type="submit" class="submit" name="SUBMIT" value="Register" id="submit_btn"> <span  id="fourtheen"></span> <!--Here, value="Register" sets the text inside the button-->
                    </td>
                </tr>
            </table>  
            

        </form>

            <table>
                <tr>
                    <td align="left">
                        <button type="button" onclick="location.href='Seller_login.php'" >
                          Login/Already have account ?
                        </button>
                    </td>
                </tr>
            </table>
</div>


<!-- <script src="../MID/LAB4/validation.js"> -->   
</body>
</html>
