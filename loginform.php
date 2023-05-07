<!DOCTYPE html>
<html>
<head>
	<title>Login-MaxWheels</title>
	<link rel="stylesheet" type="text/css" href="css\login.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
</head>
<body>
    <header class="header">

        <div id="menu-btn" class="fas fa-bars"></div>
    
        <a href="#" class="logo"> <span>Max</span>Wheels </a>
    
    </header> 
	<img class="wave" src="img\collection.jpg">
	<div class="container">
		<div class="img">
			
		</div>
		<div class="login-content">
			<form action="login.php" method="post">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" class="input" name="email" required>
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name="password" required>
            	   </div>
            	</div>
            	<a href="#">Forgot Password?</a>
            	<input type="submit" class="btn" value="Login">
				<input type="submit" class="btn1" value="SignUp" onclick="location.href='signup.php'">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
