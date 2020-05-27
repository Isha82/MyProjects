<?php
$sql="DELETE FROM task";
$cn=mysqli_connect("localhost","root","","todo");
$result=mysqli_query($cn,$sql);
mysqli_close($cn);
?>