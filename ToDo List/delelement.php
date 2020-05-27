<?php
$data=$_POST['data'];
$sql="DELETE FROM task WHERE task='$data[task]'";
$cn=mysqli_connect("localhost","root","","todo");
$result=mysqli_query($cn,$sql);
echo"done";
mysqli_close($cn);
?>