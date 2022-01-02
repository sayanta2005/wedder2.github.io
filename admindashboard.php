<?php
//include auth_session.php file on all user panel pages
include("admin_auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="admindashboard.css" />
</head>
<body>
    <div class="form">
        <p>Hey, <?php echo $_SESSION['adminuser']; ?>!</p>
        <p>You are in Admin dashboard page.</p>
        <p><a href="adminviewuser.php">View User Details</a></p>
        <p><a href="adminupdateuser.php">Update User Details</a></p>
        <p><a href="adminfeedback.php">View feedbacks</a></p>
        <p><a href="logout.php">Logout</a></p>
    </div>
</body>
</html>