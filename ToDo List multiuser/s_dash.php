
        

<?php 
session_start();
$Student_Email = $_POST['username'];
$Password = $_POST['password'];

$hostname = "localhost";
$username = "root";
$dbname = "todo";
$_SESSION['email']=$Student_Email;
$con = new mysqli($hostname, $username,"", $dbname)or die("unable to connect");
//echo $Student_Email;
//echo $Password;
$sq = "select * from register where email='$Student_Email' and password='$Password'";
//echo $sq;
$rs = $con->query($sq);
//echo $rs->num_rows;
if(!($rs->num_rows))
{   
    $msg="Please Enter correct UserName and Password!!!!";
	$_SESSION['err']=$msg;
	header("location:todologin.php");
}
else{
header("location:todolist.php");
}


?>

    