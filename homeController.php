<?php 
    include('./includes/DAOs.php');
    require_once('./includes/DTOs.php');

	$itemDAO = new itemDAO(); 
	$items = $itemDAO->getAllItems(); 
	session_start(); 
	if(empty($_SESSION['loggedIn']))
		$_SESSION['loggedIn'] = FALSE;
	if(empty($_SESSION['employeeAccount']))
		$_SESSION['employeeAccount'] = FALSE;
	$_SESSION['items'] = $items; 
	header('location:homepage.php'); 
?>