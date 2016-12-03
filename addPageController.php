<?php 
    include('./includes/DAOs.php');
    require_once('./includes/DTOs.php');

	$itemDAO = new itemDAO(); 
	$categories = $itemDAO->getAllCategories(); 
	session_start(); 
	$_SESSION['categories'] = $categories; 
	header('location:addPage.php'); 
?>