<?php
$email=$_POST['email'];
$password=$_POST['password'];
$name=$_POST['name'];
$cn=new mysqli("localhost","root","","todo");
$sql="INSERT INTO register VALUES('$name','$email','$password')";
$n=$cn->query($sql);
echo $cn->error;
echo "done";
header("location:todologin.php");
?>