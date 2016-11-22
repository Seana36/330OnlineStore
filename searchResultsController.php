<?php 
    include('DAOs.php');
    require_once('DTOs.php');

	$searchingFor = $_POST['searchBar'];

	$itemDAO = new itemDAO(); 
	$items = $itemDAO->getSearchResults($searchingFor); 
	session_start(); 
	$_SESSION['items'] = $items; 
	header('location:searchResultsDisplay.php'); 
?> 