<?php
    include('./includes/DAOs.php');
    require_once('./includes/DTOs.php');
    include('TestingScipts.php');


    $test1 = new TestingScipts(); 
	$TESTING1 = $test1->test_getAllItems();


?>