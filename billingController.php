<?php 
    include('./includes/DAOs.php');
    require_once('./includes/DTOs.php');


    

	$itemDAO = new itemDAO(); 
	$billing = $itemDAO->getBillingByID(6); 
	//$shipping = $itemDAO->updateShipping(6, $shipAdd, $shippingCity, $shippingState, $shippingZipcode); 
	session_start(); 
	$_SESSION['billing'] = $billing; 

	header('location:billingPage.php'); 
?>