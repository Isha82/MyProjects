<?php
$task=$_POST["task"];
echo $task;
$email=$_POST["email"];
echo $email;
$sql="INSERT INTO task VALUES('$email','$task')";
$cn=mysqli_connect("localhost","root","","todo") or die("Unable to connect");
mysqli_query($cn,$sql) or die("Unable to update records");
mysqli_close($cn);
echo "done";

header("location:todolist.php");
?>
