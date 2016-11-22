<?php 
    include('DAOs.php');
    require_once('DTOs.php');

	$itemDAO = new itemDAO(); 
	$items = $itemDAO->getAllItems(); 
	session_start(); 
	$_SESSION['items'] = $items; 
	header('location:homepage.php'); 
?>