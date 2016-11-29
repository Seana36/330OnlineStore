<?php 
    include('./includes/DAOs.php');
    require_once('./includes/DTOs.php');
    echo $_POST['filterControl'];
    echo $_POST['category'];
    if($_POST['category'] != null){
    	$cate = $_POST['category']; 
    }
    else {
    	$cate = "null"; 
    }

    if($_POST['filterControl'] != null){
    	$searchingFor = $_POST['filterControl']; 
    }
    else {
    	$searchingFor = "null"; 
    }
	
	

	$itemDAO = new itemDAO(); 
	$items = $itemDAO->filterResults($searchingFor, $cate); 
	session_start(); 
	$_SESSION['items'] = $items; 
	header('location:searchResultsDisplay.php'); 
?> 