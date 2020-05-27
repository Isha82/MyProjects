<?php
$data=$_POST['data'];
$task=$data["task"];
$sql="INSERT INTO task VALUES('$task')";
$cn=mysqli_connect("localhost","root","","todo") or die("Unable to connect");
mysqli_query($cn,$sql) or die("Unable to update records");
mysqli_close($cn);
echo "done";
?>