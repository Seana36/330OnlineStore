<?php 
	session_start(); 

    include('./includes/DAOs.php');
    require_once('./includes/DTOs.php');

    $itemDAO = new itemDAO(); 
	$logged=$_SESSION['customer'];
	$customer = $itemDAO->getCustomerByID($logged); 
	
	$_SESSION['customerDTO'] = $itemDAO->getCustomerByID($_SESSION['customer']); 
	header('location:updatePassPage.php'); 
    

	
?>