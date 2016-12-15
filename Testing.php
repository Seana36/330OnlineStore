<?php
    include('./includes/DAOs.php');
    require_once('./includes/DTOs.php');
    require_once('TestingScipts.php');

    $test = new TestingScipts(); 
	$TESTING1 = $test->test_getAllItems();

	$TESTING2 = $test->test_getAllCategories();

	$TESTING3 = $test->test_getCustomerByID();

	$TESTING4 = $test->test_getSearchResults();

	$TESTING5 = $test->test_filterResults(); 

	$TESTING6 = $test->test_registerNewUser();

	$TESTING7 = $test->test_updateShipping();

	$TESTING8 = $test->test_updateBilling(); 

	$TESTING9 = $test->test_getShippingByID(); 

	$TESTING10 = $test->test_getBillingByID(); 


?>