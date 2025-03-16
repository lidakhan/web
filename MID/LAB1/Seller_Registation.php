<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Registation</title>
</head>
<body>
    <h1 align="Center">Ticket Seller Registation</h1>
  
<table>
    <tr>
       <td>
        <form method="post" action="/Project/web/MID/LAB1/home.php">
            
            <fieldset>
                <legend>Seller Information</legend>
                    <table>
                        <tr>
                            <th align="left">Seller Name:</th>
                            <td>
                                <input type="text" name="seller_name" >
                            </td> 
                        </tr>
                        <tr>
                            <th align="left">Email Address:</th>
                            <td>
                                <input type="text" name="email" >
                            </td>
                        </tr>
                        <tr>
                            <th align="left">Phone Number:</th>
                            <td>
                                <input type="text" name="phone_number" >
                            </td>
                        </tr>
                        <tr>
                            <th align="left">Password:</th>
                            <td>
                                <input type="password" name="password" >
                            </td>
                        </tr>
                        <tr>
                            <th align="left">Confirm Password:</th>
                            <td>
                                <input type="password" name="confirm_password" >
                            </td>
                        </tr>
                    </table>
            </fieldset>
            <br>

            <fieldset>
                <legend>Company Details</legend>
                <table>
                    <tr>
                        <th align="left">Company Name:</th>
                        <td>
                            <input type="text" name="company_name" >
                        </td>
                    </tr>
                    <tr>
                        <th align="left">Company Address:</th>
                        <td>
                            <input type="text" name="company_address" >
                        </td>
                    </tr>
                    <tr>
                        <th align="left">Type of Service:</th>
                        <td>
                            <select id="service_category" name="service_category">
                                <option name="Personal">Personal</option>
                                <option name="Group Tour">Group Tour</option>
                                <option name="Family">Family</option>
                                <option name="School">School</option>
                                <option name="Corporate">Corporate</option>
                            </select>
                        </td>
                    </tr>
                
                </table>
            </fieldset>
            <br>

            <fieldset >
                <legend>Business Details</legend>
                <table>
                    <tr>
                        <th align="left">Bus Name:</th>
                        <td>
                            <input type="text" name="bus_name" >
                        </td>
                    </tr>
            
                    <tr>
                        <th align="left">License Number:</th>
                        <td>
                            <input type="text" name="License_number" >
                        </td>
                    </tr>
                    <tr>
                        <th align="left">Upload Bus Documents:</th>
                        <td>
                            <input type="file" name="business_documents" multiple>
                        </td>
                    </tr>
                    <tr>
                        <th align="left">Type of Buses:</th>
                        <td>
                            <input type="radio" name="bus_type" value='AC'>AC
                            <input type="radio" name="bus_type" value='Non AC'>Non AC
                            <input type="radio" name="bus_type" value='Sleeper'>Sleeper
                            <input type="radio" name="bus_type" value='Luxury'>Luxury
                        </td>
                    </tr>
                    <tr>
                        <th align="left">Registation Date:</th>
                        <td>
                            <input type="date" name="registation_date">
                        </td>
                    </tr>
                </table>
            </fieldset>

        <table>
            <tr>
                <th align="left">Agree to Terms & Conditions:</th>
                <td>
                    <input type="checkbox" name="terms" required> I agree to the <a href="">Terms & Conditions</a>
                </td>
            </tr>
        </table>
        <br>
        <table>
            <tr>
                <td align="left">
                    <input type="submit" name="submit" value="Register">  <!--Here, value="Register" sets the text inside the button-->
                </td>
            </tr>
        </table>  
        </form>
        <br><br><br>
        
    <table>
        <tr>
            <td>
                <th>Already have an account <a href="">Login here</a> </th>
            </td>
        </tr>
    </table>

 </td>


    <td>
    <img src="images/bus.avif"  width="1024" height="600">
    </td>
    
  </tr>
</table>

</body>
</html>