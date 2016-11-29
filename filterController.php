<?php 
    include('./includes/DAOs.php');
    require_once('./includes/DTOs.php');


	if($_POST['filterControl'] != null){
		$searchingFor = $_POST['filterControl'];
	}
	else {
		$searchingFor = "null";
	}

	$itemDAO = new itemDAO(); 
	$items = $itemDAO->filterResults($searchingFor); 
	session_start(); 
	$_SESSION['items'] = $items; 
	header('location:searchResultsDisplay.php'); 
?> 