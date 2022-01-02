<style>
table, th, td {
  border:1px solid black;
}
</style>
<?php
 require('db.php');
$sql = "SELECT fullname,feedback FROM feedback";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  echo "<table \"style= width:50%\"><tr><th>Name</th><th>Description</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["fullname"]."</td><td> ".$row["feedback"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
?>
<p><a href="admindashboard.php">Back</a></p>