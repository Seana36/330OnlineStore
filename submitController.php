<?php 
    include('./includes/DAOs.php');
    require_once('./includes/DTOs.php');
    echo "hello world";
	session_start();
    $itemDAO = new itemDAO(); 
    $newOrder = $itemDAO->addOrder();
    #var_dump($newOrder);
    if($newOrder == true){
    	//submitted successfully 
    	echo "it worked!";
    	header('location:successfulSubmit.php');
    }
    else {
    	//submit did not work 
    }
?>