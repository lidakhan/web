<?php
include '../model/db.php';



$conn = Create_Conn();

$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id = $id";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);
?>

<h2>Update User Info</h2>
<form method="POST" action="../control/update_user_control.php">
    <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
    <label>Name:</label><br>
    <input type="text" name="seller_name" value="<?php echo htmlspecialchars($user['seller_name']); ?>"><br>
    <label>Email:</label><br>
    <input type="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>"><br><br>
    <input type="submit" name="update" value="Update">
</form>
