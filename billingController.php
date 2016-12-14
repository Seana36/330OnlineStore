<?php 
    include('./includes/DAOs.php');
    require_once('./includes/DTOs.php');


    

	session_start(); 
	$itemDAO = new itemDAO(); 
	$_SESSION['billing'] = $itemDAO->getBillingByID($_SESSION['customer']); 

	header('location:billingPage.php'); 
?>