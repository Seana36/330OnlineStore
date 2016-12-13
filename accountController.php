<?php 
    include('./includes/DAOs.php');
    require_once('./includes/DTOs.php');

	$itemDAO = new itemDAO(); 
	$customer = $itemDAO->getCustomerByID(6); 
	session_start(); 
	$_SESSION['customer'] = $customer; 
	header('location:accountPage.php'); 
?>