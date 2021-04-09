<?php
$task=$_POST['task'];
$email=$_POST['email'];
$sql="DELETE FROM task WHERE task='$task' and email='$email'";
$cn=mysqli_connect("localhost","root","","todo") or die("unable to connect");
$result=mysqli_query($cn,$sql) or die("data not deleted");
echo"done";
header("location:todolist.php");
mysqli_close($cn);
?>