<?php
include '../model/db.php';



$conn = Create_Conn();

$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id = $id";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <link rel="stylesheet" href="update_user.css">
     
</head>
<body>
   

<h2>Update User Info</h2>
<form method="POST" action="../control/update_user_control.php" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
    
    <label>Name:</label><br>
    <input type="text" name="seller_name" value="<?php echo htmlspecialchars($user['seller_name']); ?>"><br>
    
    <label>Email:</label><br>
    <input type="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>"><br>

    <label>Change Image:</label><br>
    <input type="file" name="myfile"><br><br>
    
    <input type="submit" name="update" value="Update">
</form>

</body>
</html>