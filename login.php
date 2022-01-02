<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="login2.css"/>
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
    if (isset($_POST['email'])) {
        $email = stripslashes($_REQUEST['email']);    // removes backslashes
        //$email = mysqli_real_escape_string($con, $email);
        $passwordinput = stripslashes($_REQUEST['passwordinput']);
        //$password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE email='$email'
                     AND passwordinput='" . md5($passwordinput) . "'";
        $result = mysqli_query($con, $query);
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            //$idq="SELECT * FROM `users` WHERE id='$ID'";
            $_SESSION['email'] = $email;
            // Redirect to user dashboard page
            header("Location: dashboard2.php");
        } else {
            echo "<div id=incorrectpass class='form' >
                  <h3 c>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
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
				<h3>Sign In</h3>
			</div>
			<div class="card-body">
				<form class="horizontal" method="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input id= "email" name="email" type="text" class="form-control" placeholder="Enter email">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input id= "passwordinput" name="passwordinput" type="password" class="form-control" placeholder="password">
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>
					<div class="form-group">
						<input id="login" type="submit" value="Login" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="registration.php">Sign Up</a>
				</div>
			</div>
		</div>
	</div>
<?php
    }
?>
    </body>
</html>