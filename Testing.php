<?php
    include('./includes/DAOs.php');
    require_once('./includes/DTOs.php');
    require_once('TestingScipts.php');


    $test1 = new TestingScipts(); 
	$TESTING1 = $test1->test_getAllItems();

	$test2 = new TestingScipts(); 
	$TESTING2 = $test2->test_getAllCategories();

	$test3 = new TestingScipts();
	$TESTING3 = $test3->test_getCustomerByID();

	$test4 = new TestingScipts();
	$TESTING4 = $test4->test_getSearchResults();

	$test5 = new TestingScipts();
	$TESTING5 = $test5->test_filterResults(); 


?>