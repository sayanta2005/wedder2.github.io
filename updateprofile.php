<?php
    include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="updateprofile.css"></>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php
    require("db.php");
    if(isset($_REQUEST['comp_name'])){
        $comp_name= stripslashes($_REQUEST['comp_name']);
        $salary= stripslashes($_REQUEST['salary']);
        $height= stripslashes($_REQUEST['height']);
        $weightkg=    stripslashes($_REQUEST['weightkg']);
        $bloodgroup=    stripslashes($_REQUEST['bloodgroup']);
        $email=$_SESSION['email'];

        $query_update= "UPDATE `users`
                        SET comp_name='$comp_name',salary='$salary',height='$height',weightkg='$weightkg',bloodgroup='$bloodgroup'
                        WHERE email='$email'";
        $result_update= mysqli_query($con,$query_update);

        if($result_update){
          header("Location: dashboard2.php");
        }
        else{
            echo $con->error;
        }
    }
    else{
?>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
<a class="navbar-brand font-weigt-bold " href="#">Online Matrimonial Portal</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsiblenavbar">
                <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse text-center" id="collapsiblenavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="navbar-item">
                        <a class="nav-link text-white" href="dashboard2.php">Go to User Dashboard</a>
                    </li>
                </ul>
            </div>
</nav>
<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Enter Basic & Job Details</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="comp_name">Company Name</label>  
  <div class="col-md-5">
  <input id="comp_name" name="comp_name" type="text" placeholder="Enter the company you work for" class="form-control input-md">
  <span class="help-block">(NA for unemployed)</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="salary">Salary</label>  
  <div class="col-md-4">
  <input id="salary" name="salary" type="text" placeholder="Enter Salary" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="height">Height</label>  
  <div class="col-md-4">
  <input id="height" name="height" type="text" placeholder="Enter Height" class="form-control input-md">
  <span class="help-block">(In cm)</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="weight">Weight</label>  
  <div class="col-md-4">
  <input id="weightkg" name="weightkg" type="text" placeholder="Enter your Weight" class="form-control input-md">
  <span class="help-block">(In Kg)</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="bloodgroup">Blood Group</label>  
  <div class="col-md-4">
  <input id="bloodgroup" name="bloodgroup" type="text" placeholder="Enter your Blood Group" class="form-control input-md">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="update_basic"></label>
  <div class="col-md-4">
    <button id="update_basic" type="submit" name="update_basic" class="btn btn-success">Update </button>
  </div>
</div>

</fieldset>
</form>
<?php
    }
?>

</body>
</html>