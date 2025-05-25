<?php
include "../control/profilecontrol.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Profile</title>
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="logout.css">
</head>
<body>
    <div class="one">
        <h1>User Dashboard</h1>
    </div>

    <div class="profile">
            <h2>Welcome, <?php echo $user['seller_name']; ?></h2>

            <?php
            foreach ($user as $key => $value) {
                echo '<p><span class="label">' . htmlspecialchars($key) . ':</span> ' . htmlspecialchars($value) . '</p>';
            }
            ?>

            <?php if (!empty($user['myfile'])): ?>
            <p><strong>Uploaded Image:</strong></p>
            <img src="../uploads/<?php echo htmlspecialchars($user['myfile']); ?>" 
                alt="User Image" 
                style="max-width: 200px; border-radius: 10px;">
        <?php else: ?>
            <p>No image uploaded.</p>
        <?php endif; ?>


    </div>

    <div >
        <button class="three" type="button" onclick="location.href='../control/logout.php'" >logout
    </div>

</body>
</html>
