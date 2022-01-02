<?php
//include auth_session.php file on all user panel pages
include("admin_auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<?php
    require("db.php");
    if(isset($_REQUEST['deleteuser'])){
        $deleteuser= stripslashes($_REQUEST['deleteuser']);

        $query_update= "DELETE FROM `users` WHERE email='$deleteuser'";
        $result_update= mysqli_query($con,$query_update);

        if($result_update){
          header("Location: admindashboard.php");
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
<legend>Update User</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="deleteuser">Enter Useremail</label>  
  <div class="col-md-4">
  <input id="deleteuser" name="deleteuser" type="text" placeholder="enter email of the user to be deleted" class="form-control input-md">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="deletebutton"></label>
  <div class="col-md-4">
    <button id="deletebutton" name="deletebutton" class="btn btn-danger">Delete</button>
  </div>
</div>

</fieldset>
</form>
<?php
    }
?>

</body>
</html>