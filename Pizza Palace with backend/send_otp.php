<?php
session_start();
$con=mysqli_connect('localhost','root','','user');
$email=$_POST['email'];
$res=mysqli_query($con,"select * from otp where email='$email'");
$count=mysqli_num_rows($res);
if($count>0){
	echo "yes";
}else{
	$sql="INSERT INTO otp VALUES('$email','')";
    mysqli_query($con,$sql) or die("Unable to update records");
    mysqli_close($cn);
    echo "yes";
}
?>