<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div>
        <div style="background-color:#204987; height:20px; "></div>
        <div><b><h1 style="color:#204987; height:40px ; text-align:center" >ToDo List</h1></b></div>
		<div style="background-color:#204987; height:20px;"></div>
</div><br><br>
<div class="container">
   <div class="login-container text-center">
       <form action="s_dash.php" method="post">
           <h3 style="color:black">LOGIN</h3><br><br>
           <div>
               <label style="color:black">Username</label>
               <input type="text" name="username" placeholder="Email" value="">
			   <hr>
           </div>
           <div>
               <label style="color:black">Password</label>
               <input type="password" name="password" placeholder="Password" value="">
			   <hr>
           </div>
           <input type="submit" name="login" value="LOGIN" class="btn btn-primary">
		   <br><br>
		   <a href="signup.html"><button type="button" class="btn btn-primary">Sign Up Instead</button></a>
		   <p style="color:red;"><?php 
		   session_start();
							       if(isset($_SESSION['err']))
							  echo $_SESSION['err'];
                                session_destroy();						  ?>  </p>
       </form>
   </div>
</div>   
</body>
</html>

