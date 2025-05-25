<?php
//include "../control/adminlogincontrol.php"; 
include "../control/admin_control.php"           // session and access control
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet"  href="admin_style.css">
    <link rel="stylesheet"  href="logout.css">
</head>
<body>

<div class="one">
    <h1>Admin Dashboard</h1>
    <h3>Welcome, <?php echo $_SESSION['seller_name']; ?> </h3>
    <p>Email: <?php echo $_SESSION['email']; ?></P>
</div>


<table>
    <tr>
        <th>ID</th><th>Name</th><th>Email</th><th>Action</th>
    </tr>

    <?php
    $conn = Create_Conn();
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);

   while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . htmlspecialchars($row['seller_name']) . "</td>";
    echo "<td>" . htmlspecialchars($row['email']) . "</td>";
    echo "<td>
            <a href='update_user.php?id=" . $row['id'] . "'>Update</a> |
            <a href='admin.php?delete_id=" . $row['id'] . "' onclick='return confirm(\"Delete this user?\");'>Delete</a>
          </td>";
    echo "</tr>";
}


    closeCon($conn);
    ?>
</table>

    <div >
        <button class="three" type="button" onclick="location.href='../control/logout.php'" >logout
    </div>

</body>
</html>
