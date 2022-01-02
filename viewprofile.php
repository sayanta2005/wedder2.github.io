<?php
    include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
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
    $email=$_SESSION['email'];
    $view= "SELECT * from `users` WHERE email= '$email'";
    $view_query= $con->query($view);
    if($view_query->num_rows>0){
        while($row=$view_query->fetch_assoc()){
        echo "<p>Name: ".$row['fname']."<br>"."City: ".$row['city']."<br>"."Gender: ".$row['gender']."<br>"."Religion: ".$row['religion']."<br>"."Preferred City: ".$row['pr_city']."<br>"."Company Name: ".$row['comp_name']."<br>"."Salary: ".$row['salary']."<br>"."Height: ".$row['height']." cm"."<br>"."Weight: ".$row['weightkg']." Kg"."</p>";
        }
    }
    else{
        echo "Failure";
    }
?>
</body>    

</html>
