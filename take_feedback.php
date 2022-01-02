<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php
    require("db.php");
    if(isset($_REQUEST['fullname'])){
        $fullname= stripslashes($_REQUEST['fullname']);
        $feed= stripslashes($_REQUEST['feed']);
        $feed    = mysqli_real_escape_string($con, $feed);
        $feedback_query= "INSERT into `feedback` (fullname,feedback)
                            VALUES('$fullname','$feed')";
        $result_feedback= mysqli_query($con,$feedback_query);
        if($result_feedback){
            echo "Feedback Submitted";
            echo "<p><a href=\"dashboard2.php\">Go back to dashboard</a>";
        }
        else{
            echo "fail";
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
<legend>Enter Feedback</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Name</label>  
  <div class="col-md-4">
  <input id="fullname" name="fullname" type="text" placeholder="Enter Name" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="feedback">Feedback</label>  
  <div class="col-md-4">
  <input id="feed" name="feed" type="text" placeholder="Your Feedback" class="form-control input-md">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="feedback"></label>
  <div class="col-md-4">
    <button id="feedback" type="submit" name="feedback" class="btn btn-success">Submit</button>
  </div>
</div>

</fieldset>
<p><a href="dashboard2.php">Go back to dashboard</a>
</form>

<?php
    }
?>
</body>
</html>