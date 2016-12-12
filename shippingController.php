<?php 
    include('./includes/DAOs.php');
    require_once('./includes/DTOs.php');


    

	$itemDAO = new itemDAO(); 
	$shippingI = $itemDAO->getShippingByID(6); 
	//$shipping = $itemDAO->updateShipping(6, $shipAdd, $shippingCity, $shippingState, $shippingZipcode); 
	session_start(); 
	$_SESSION['shippingI'] = $shippingI; 

	header('location:shippingPage.php'); 
?>