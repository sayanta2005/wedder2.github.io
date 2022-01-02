<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="login.css"/>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
<?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['adminuser'])) {
        $adminuser = stripslashes($_REQUEST['adminuser']);    // removes backslashes
        //$adminuser = mysqli_real_escape_string($con, $adminuser);
        $adminpasswordinput = stripslashes($_REQUEST['adminpasswordinput']);
        //$password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `admins` WHERE adminuser='$adminuser'
                     AND adminpasswordinput='$adminpasswordinput'";
        $result = mysqli_query($con, $query);
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            //$idq="SELECT * FROM `users` WHERE id='$ID'";
            $_SESSION['adminuser'] = $adminuser;
            // Redirect to user dashboard pag
            header("Location: admindashboard.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='adminlogin.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
<div class="bgimg">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a class="navbar-brand font-weigt-bold mx-auto" href="#">Online Matrimonial Portal</a>
        </nav>
   </div>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Admin Sign In</h3>
			</div>
			<div class="card-body">
				<form class="horizontal" method="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input id= "adminuser" name="adminuser" type="text" class="form-control" placeholder="Enter user id">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input id= "adminpasswordinput" name="adminpasswordinput" type="text" class="form-control" placeholder="password">
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>
					<div class="form-group">
						<input id="login" type="submit" value="Login" class="btn float-right login_btn">
					</div>
				</form>
			</div>
		</div>
	</div>
<?php
    }
?>
    </body>
</html>