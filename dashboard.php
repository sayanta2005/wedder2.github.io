<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="dashboard.css" />
    
</head>
<body>
<p>Hey, <?php echo $_SESSION['email']; ?>!</p>
            <p>You are in User dashboard page.</p>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
           
        </div>
        <div class="card">
            <span><a href="updateprofile.php">Update Your Profile</a></span>
        </div>
        <p><a href="viewprofile.php">View Your Profile</a></p>
        <p><a href="suggestconnection.php">View people you may like</a></p>
        <p><a href="setpreference.php">Set Preferences</a></p>
        <p><a href= "take_feedback.php">Feedback</a></p>
        <p><a href="logout.php">Logout</a></p>
    </div>
    </div>
		</div>
	</div>
</div>
</body>
</html>