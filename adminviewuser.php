<?php
//include auth_session.php file on all user panel pages
include("admin_auth_session.php");
?>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<?php
 require('db.php');
$sql = "SELECT * FROM users";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  echo "<table \"style= width:50%\"><tr><th>Name</th><th>City</th><th>Religion</th><th>Salary</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["fname"]."</td><td> ".$row["city"]."</td><td> ".$row["religion"]."</td><td> ".$row["salary"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
?>
<p><a href="admindashboard.php">Back</a></p>