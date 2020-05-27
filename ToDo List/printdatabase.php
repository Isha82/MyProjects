<?php
$sql="SELECT * from task";
$cn=mysqli_connect("localhost","root","","todo");
$result=mysqli_query($cn,$sql);
$database=array();
while($row=mysqli_fetch_assoc($result))
{
    array_push($database,$row);
}
$k=json_encode($database);
echo $k;
mysqli_close($cn);
?>