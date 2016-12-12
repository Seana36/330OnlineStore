<?php 
    include('./includes/DAOs.php');
    require_once('./includes/DTOs.php');

	$itemDAO = new itemDAO(); 
	$items = $itemDAO->getAllItems();
    session_start();
    $_SESSION['items'] = $items;
    header('location:removeItem.php');
?>