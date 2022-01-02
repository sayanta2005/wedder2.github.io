<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="registration2.css"/>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['email'])) {
        // removes backslashes
        
        //escapes special characters in a string
        $email    = stripslashes($_REQUEST['email']);
        //$email    = mysqli_real_escape_string($con, $email);
        $passwordinput = stripslashes($_REQUEST['passwordinput']);
        //$passwordinput = mysqli_real_escape_string($con, $passwordinput);
        $create_datetime = date("Y-m-d H:i:s");
        $fname = stripslashes($_REQUEST['fname']);
        //$fname    = mysqli_real_escape_string($con, $fname);
        $religion    = stripslashes($_REQUEST['religion']);
        //$religion    = mysqli_real_escape_string($con, $religion);
        
        $city    = stripslashes($_REQUEST['city']);
        //$city    = mysqli_real_escape_string($con, $city);
        $gender    = ($_REQUEST['gender']);
        //$gender    = mysqli_real_escape_string($con, $gender);
        //$dob   = ($_REQUEST['dob']);
        //$dob    = mysqli_real_escape_string($con, $dob);
        //$comp_name= stripslashes($_REQUEST['comp_name']);
        //$salary= stripslashes($_REQUEST['salary']);
        //$height= stripslashes($_REQUEST['height']);
        //$weightkg=    stripslashes($_REQUEST['weightkg']);
        //$bloodgroup=    stripslashes($_REQUEST['bloodgroup']);

        $query    = "INSERT into `users` (email, passwordinput, create_datetime, fname, religion,city,gender)
                     VALUES ('$email', '" . md5($passwordinput) . "', '$create_datetime','$fname','$religion','$city','$gender')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
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
				<h3>Registration Form</h3>
			</div>
			<div class="card-body">
            <form class="horizontal" method="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input id= "email" name="email" type="text" class="form-control" placeholder="Enter email" required="">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input id= "passwordinput" name="passwordinput" type="password" class="form-control" placeholder="password" required="">
					</div>
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input id= "fname" name="fname" type="text" class="form-control" placeholder="Enter full name" required="">
					</div>
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input id= "religion" name="religion" type="text" class="form-control" placeholder="Enter Religion" required="">
					</div>
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input id= "city" name="city" type="text" class="form-control" placeholder="Enter city" required="">
					</div>
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input id= "gender" name="gender" type="text" class="form-control" placeholder="Enter gender(M/F)" required="">
					</div>

					<div class="form-group">
						<input id="register" type="submit" value="Register" class="btn float-right login_btn">
					</div>
				</form>
</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Already have an account?<a href="login.php">Login</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
    }
?>

