<?php
// include "../control/UserLogincontrol.php";
include "../control/adminlogincontrol.php"
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Login</title>
    <link rel="stylesheet" href="sellers.css">
     
</head>
<body>
   
<div class="form-container">
<h1 >Ticket Customer Login</h1><br>
    
    <form method="post" action="" >
                
            <div class="box1">
                
                        <table>
                            
                            <tr>
                                <th align="left">Customer Name:</th>
                                <td class="field-group">
                                    <input type="text" name="seller_name" id="S_name" placeholder="Mukti"> 

                                </td> 
                            </tr>
                            <tr>
                                <th align="left">Email Address:</th>
                                <td>
                                    <input type="text" name="email" id="email" placeholder="mukti@gmail.com"> 
                                </td>
                            </tr>
                            <tr>
                                <th align="left">Password:</th>
                                <td>
                                    <input type="password" name="password" id="Pass" placeholder="abcd1$&"> 
                                </td>
                            </tr>
                            
                        </table>
                
            </div>

            <table>
                <tr>
                    <td align="left">
                        <input type="submit" class="submit" name="SUBMIT" value="Login" id="submit_btn">
                    </td>
                </tr>
            </table>  
        </form>

            <table>
                <tr>
                    <td align="left">
                        <button type="button" onclick="location.href='Seller_Registration.php'" >
                          Signup/Need account?
                        </button>
                    </td>
                </tr>
            </table>
</div>


</body>
</html>
