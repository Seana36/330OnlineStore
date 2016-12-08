<?php 
    include('./includes/DAOs.php');
    require_once('./includes/DTOs.php');

	$itemDAO = new itemDAO(); 
	$items = $itemDAO->getAllItems(); 
	session_start(); 
	$_SESSION['loggedIn'] = FALSE;
	$_SESSION['employeeAccount'] = FALSE;
	$_SESSION['items'] = $items; 
	header('location:homepage.php'); 
?>