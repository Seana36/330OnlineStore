<?php 

	include('./includes/DAOs.php');
    require_once('./includes/DTOs.php'); 

	$userName = $_POST["username"];
	$fName = $_POST["fName"];
	$lName = $_POST["lName"];
	$password = $_POST["password"];
	$email = $_POST["email"];
	$phoneNo = $_POST["phoneNo"];
	$securityQuestion = $_POST["securityQuestion"];
	$securityQuestionAns = $_POST["securityQuestionAns"];

	$itemDAO = new itemDAO(); 
	$items = $itemDAO->registerNewUser($userName, $fName, $lName, $password, $email, $phoneNo, $securityQuestion, $securityQuestionAns); 
	session_start(); 
	$_SESSION['items'] = $items; 
	#change when account page is ready 
	header('location:homeController.php'); 

?> 