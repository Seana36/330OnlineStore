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
      
	   
      <div class = "container form-signin">
         
      </div> <!-- /container -->
      
<?php
session_start();
include("./includes/nav.php");
?>
	  
      <div class = "container">
		
		<h2>Update Profile</h2>
		<form role = "register form" autocomplete = "off" action = "./editProfile.php" method="post">
			<div class = "form-group">
			<input type = "text" name = "oldusername" class = "form-control" placeholder = "Current Username" required></div>
			
			<div class = "form-group">
			<input type = "text" name = "newusername" class = "form-control" placeholder = "New Username"></div>
			
			<div class = "form-group">
			<input type = "password" name = "oldpassword" class = "form-control" placeholder = "Password" required></div>
			
			<div class = "form-group">
			<input type = "password" name = "newpassword" class = "form-control" placeholder = "New Password"></div>
			
			<div class = "form-group">
			<input type = "text" name = "newfName" class = "form-control" placeholder = "New First Name"></div>
			
			<div class = "form-group">
			<input type = "text" name = "newlName" class = "form-control" placeholder = "New Last Name"></div>
			
			<div class = "form-group">
			<input type = "text" name = "newEmail" class = "form-control" placeholder = "New Email"></div>
			
			<div class = "form-group">
			<input type = "number" name = "NewPhoneNo" class = "form-control" placeholder = "New Phone Number"></div>
			
			<div class = "form-group">
			<input type = "text" name = "newSecurityQuestion" class = "form-control" placeholder = "New Security Question"></div>
			
			<div class = "form-group">
			<input type = "text" name = "newSecurityQuestionAns" class = "form-control" placeholder = "New Security Answer"></div>
			
			
			<div class = "form-group">
			<input type = "submit" class = "form-control btn btn-primary" name = "submit" value = "Save Changes"></div>
		</form>
		
         
      </div> 
	  
	  
	  <!-- jQuery -->
		<script src="js/jquery.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.min.js"></script>
	
	</body>
</html>