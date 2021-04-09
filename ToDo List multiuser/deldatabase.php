<?php
$email=$_POST["email"];
//echo $email;
$sql="DELETE FROM task where email='$email'";
$cn=mysqli_connect("localhost","root","","todo");
while($result=mysqli_query($cn,$sql)){

}
header("location:todolist.php");
mysqli_close($cn);
?>