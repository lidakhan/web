<html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" href="../LAB2/customer.css">
</head>
<body>
    <form action="world.php" method="post">
    <fieldset>
        <legend>Registration Page</legend>
        <table>
            <table>
                <tr>
                    <td>
                        UserID:
                    </td>
                    <td>
                        <input type="text" name="userid" ><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        Name:
                    </td>
                    <td>
                        <input type="text" name="name" ><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        Password:
                    </td>
                    <td>
                        <input type="password" name="password" >
                    </td>
                </tr>    
                <tr>
                    <td>
                        Confirm Password:
                    </td>
                    <td>
                        <input type="password" name="confirm_password" ><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        Email:
                    </td>
                    <td>
                        <input type="email" name="email" ><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        Date Of Birth:
                    </td>
                    <td>
                        <input type="date" name="dob" ><br>
                    </td>
                </tr>
                <tr>
                <td>Gender:</td>
                <td>
                    <select name="gender">
                        <option value="">Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </td>
            </tr>
                <tr>
                    <td>Educational Qualification:</td>
                    <td>
                        <input type="checkbox" name="education" value="HSC">HSC
                        <input type="checkbox" name="education" value="BSC">BSC
                        <input type="checkbox" name="education" value="MSC">MSC
                    </td>
                </tr>
                <tr>
                <td>Marital Status:</td>
                <td>
                    <input type="radio" name="marital_status" value="single">Single
                    <input type="radio" name="marital_status" value="married">Married
                    <input type="radio" name="marital_status" value="divorced">Divorced
                </td>
            </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Submit" />
                     
                    </td>
                </tr>
            </table>
        </table>
    </fieldset>
    </form>
</body>
</html>
 