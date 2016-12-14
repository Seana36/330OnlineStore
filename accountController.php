<?php 
    include('./includes/DAOs.php');
    require_once('./includes/DTOs.php');

	session_start();
	$itemDAO = new itemDAO(); 
	$_SESSION['customerDTO'] = $itemDAO->getCustomerByID($_SESSION['customer']); 
	if($_SESSION['loggedIn'])
	{
		header('location:accountPage.php'); 
	}
	else
	{
		header('location:homeController.php');
	}
?>