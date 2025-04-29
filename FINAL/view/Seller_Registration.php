<?php
include "../control/validation.php";
$Sname = Namevalidate();
$Email = EmailValidate();

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Registation</title>
    <link rel="stylesheet" href="SELLER.css">
</head>
<body>
    <div class="top">
        <h1 align="Center">Ticket Seller Registation</h1>
    </div>

<table>
    <tr>
       <td>
    <form method="post" action="">
            
        <div class="box1">
            
                <h3 style="color:yellow"><label>Seller Information</label></h3>
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
                                <input type="text" name="phone_number" id="PH_num" placeholder="019********"> <span style="color:red" id="three"></span>
                            </td>
                        </tr>
                        <tr>
                            <th align="left">Password:</th>
                            <td>
                                <input type="password" name="password" id="Pass" placeholder="abc1$&"> <span style="color:red" id="four"></span>
                            </td>
                        </tr>
                        <tr>
                            <th align="left">Confirm Password:</th> 
                            <td>
                                <input type="password" name="confirm_password" id="Conf_pass" placeholder="abc1$&"> <span style="color:red" id="five"></span>
                            </td>
                        </tr>
                    </table>
            
        </div>

         <br>

         <div class="box2">
            
           <h3 style="color:yellow"> <label>Company Details</label>  </h3>
                <table>
                    <tr>
                        <th align="left">Company Name:</th>
                        <td>
                            <input type="text" name="company_name" id="Com_name" placeholder="SuperBlock or tigerIT"> <span style="color:red" id="six"></span>
                        </td>
                    </tr>
                    <tr>
                        <th align="left">Company Address:</th>
                        <td>
                            <input type="text" name="company_address" id="Com_add" placeholder="Kuril,Dhaka,1210"> <span style="color:red" id="seven"></span>
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
                            <span style="color:red" id="eight"></span>

                        </td>
                    </tr>
                
                </table>
            
        <div>
        <br>

            <div class="box3">
            
                <h3 style="color:yellow"> <label>Business Details</label></h3>
                <table>
                    <tr>
                        <th align="left">Bus Name:</th>
                        <td>
                            <input type="text" name="bus_name" id="Bus_name" placeholder="Bus Poribhohon"> <span style="color:red" id="nine"></span>
                        </td>
                    </tr>
            
                    <tr>
                        <th align="left">License Number:</th>
                        <td>
                            <input type="text" name="License_number" id="Lic_num" placeholder="9645878521"> <span style="color:red" id="ten"></span>
                        </td>
                    </tr>
                    <tr>
                        <th align="left">Upload Bus Documents:</th>
                        <td>
                            <input type="file" name="business_documents" id="busi_doc" multiple >
                        </td>
                    </tr>
                    <tr>
                        <th align="left">Type of Buses:</th>
                        <td>
                            <input type="radio" name="bus_type" value='AC'>AC 
                            <input type="radio" name="bus_type" value='Non AC'>Non AC
                            <input type="radio" name="bus_type" value='Sleeper'>Sleeper
                            <input type="radio" name="bus_type" value='Luxury'>Luxury 
                            <br>
                            <span style="color:red" id="twelve"></span>
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
                    <input type="checkbox" name="terms" id="Terms"> I agree to the <a href="">Terms & Conditions</a> <br>
                    <span style="color:red" id="thirteen"></span>
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
    
        <br><br><br>
        
    <table>
        <tr>
            <td>
                <th >Already have an account <a href="" id="login">Login here</a> </th>
            </td>
        </tr>
    </table>

 </td>


  
    <!-- <td>
    <img src="images/bus.avif"  width="1024" height="600">
    </td> -->
    
  </tr>
</table>



</body>
</html>
