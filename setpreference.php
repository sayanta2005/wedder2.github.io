<?php
    include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="setpreference.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
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
<?php
    require("db.php");
    if(isset($_REQUEST['pr_city'])){
        $pr_city= stripslashes($_REQUEST['pr_city']);
        $email=$_SESSION['email'];

        $query_pr= "UPDATE `users`
                        SET pr_city='$pr_city'
                        WHERE email='$email'";
         $result_pr= mysqli_query($con,$query_pr);

        

        if($result_pr){
          header("Location: dashboard2.php");
        }
        else{
            echo $con->error;
        }
    }
    else{
?>
<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Set Preference</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="pr_city">Set Preferred City</label>  
  <div class="col-md-4">
  <input id="pr_city" name="pr_city" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="preference_set"></label>
  <div class="col-md-4">
    <button id="preference_set" name="preference_set" class="btn btn-success">Save Changes</button>
  </div>
</div>
    </form>
<?php
    }
?>


</body>
</html>