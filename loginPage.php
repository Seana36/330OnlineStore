<html lang = "en">

	<head>
		<title>Wham-Bham-Azon Login</title>
		<link href = "css/bootstrap.min.css" rel = "stylesheet">
		<link href="css/shop-homepage.css" rel="stylesheet">
		<script src="login.js"></script>
		<style>
         body {
            padding-top: 40px;
            padding-bottom: 40px;
         }
         
         .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
            color: #017572;
         }
         
         .form-signin .form-signin-heading,
         .form-signin .checkbox {
            margin-bottom: 10px;
         }
         
         .form-signin .checkbox {
            font-weight: normal;
         }
         
         .form-signin .form-control {
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
         }
         
         .form-signin .form-control:focus {
            z-index: 2;
         }
         
         .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            border-color:#017572;
         }
         
         .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-color:#017572;
         }
         
		 .form-signin input[type="confirm password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-color:#017572;
         }
		 
         h2{
            text-align: center;
            color: #017572;
         }
      </style>
      
   </head>
	
   <body>
      
      <h2>Enter Username and Password</h2>
	   
      <div class = "container form-signin">
         
      </div> <!-- /container -->
      
<?php
include("./includes/nav.php");
?>
	  
      <div class = "container">
      
		<p class="text-center" style="color:red"></p>
		<form role="form"autocomplete="off" action = "login.php" method = "post">				
			<div class="form-group">
			<input type="text" name = "username" class="form-control" placeholder="Username" required autofocus></div>
			<div class="form-group">
			<input type="password" name = "password" class="form-control" placeholder="Password" required></div>
			<div class="form-group">
			<input type="submit" class="form-control btn btn-primary" name="submit" value="Login"></div>
		</form>
		
		<!--<h2>Register New Account</h2>
		<form role = "register form" autocomplete = "off">
			<div class = "form-group">
			<input type = "text" name = "username" class = "form-control" placeholder = "New Username"></div>
			<div class = "form-group">
			<input type = "password" name = "password" class = "form-control" placeholder = "Password" required></div>
			<div class = "form-group">
			<input type = "confirm password" name = "password" class "form-control" placeholder = "Confirm Password" required></div>
			<div class = "form-group">
			<input type = "submit" class = "form-control btn btn-primary" name = "submit" value = "Register"></div>
		</form>-->
		
         
      </div> 
	  <a href = "registerPage.php">Register New User</a>
	  
	  <!-- jQuery -->
		<script src="js/jquery.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.min.js"></script>
	
	</body>
</html>