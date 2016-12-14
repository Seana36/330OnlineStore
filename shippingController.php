<?php 
    include('./includes/DAOs.php');
    require_once('./includes/DTOs.php');


    

	session_start(); 
	$itemDAO = new itemDAO(); 
	$_SESSION['shipping'] = $itemDAO->getShippingByID($_SESSION['customer']); 
	
	header('location:shippingPage.php'); 
?>