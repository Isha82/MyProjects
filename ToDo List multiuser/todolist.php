<?php
session_start();
$email=$_SESSION['email'];
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="todo.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div>
        <div style="background-color:#204987; height:20px; "></div>
        <div><b><h1 style="color:#204987; height:30px ; text-align:center" >ToDo List</h1></b></div>
		<div style="background-color:#204987; height:20px;"></div>
</div>

<div><h2 style="color:#204987;background-color:white; height:30px ; text-align:center">Your Tasks</h2></div><br>
<span>
<form action="todo.php" method="POST">
<input type="text" name="task" value="" size="100" style="font-size:23px;" placeholder="Type here to add to your ToDo list">
<input type="submit" id="added" value="Add"><br><br>
<input type="hidden" name="email" value="<?php echo $email;?>">
</form>
</span>
<?php
$hostname = "localhost";
$username = "root";
$dbname = "todo";
$con = new mysqli($hostname, $username,"", $dbname)or die("unable to connect");
$ro = "select * from task where email='$email'";
$row = $con->query($ro);
while($rs=$row->fetch_array()){
    //echo "$rs[0]";
    echo "<br><div class='col-sm-12' style='background-color:#DEF8DE;'><h4 style='text-align:center;font-weight:bold;font-size:20px;'>$rs[1]</h4></div><br><br>";
}

?>
<br><br>

<form action="delelement.php" method="POST">
<input type="text" id="completed" name="task" value="" style="font-size: 23px;" size="25" placeholder="Great! You've completed a task">
<input type="submit" id="delete" value="Delete" style="height:36px; width:90px; font-size: 18px;">
<input type="hidden" name="email" value="<?php echo $email;?>"> 
</form>
<form action="deldatabase.php"  method="POST">
<input type="submit" id="deleteall" value="Delete All" style="height:36px; width:90px; font-size: 18px;">
<input type="hidden" name="email" value="<?php echo $email;?>">  
</form>



</body>
</html>