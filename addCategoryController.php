<?php 
    include('./includes/DAOs.php');
    require_once('./includes/DTOs.php');
	session_start();

	$itemDAO = new itemDAO(); 
	$categories = $itemDAO->getAllCategories(); 
	$_SESSION['categories'] = $categories; 
	header('location:addCategory.php'); 
?>