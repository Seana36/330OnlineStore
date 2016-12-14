<?php
    include('./includes/DAOs.php');
    require_once('./includes/DTOs.php');
    require_once('TestingScipts.php');

//Test 1
//test getAllItems()
    $test = new TestingScipts(); 
	$TESTING1 = $test->test_getAllItems();

//Test 2
//Test getAllCategories()
	#$test2 = new TestingScipts(); 
	$TESTING2 = $test->test_getAllCategories();

//Test 3
//Test getCustomerByID()
	#$test3 = new TestingScipts();
	$TESTING3 = $test->test_getCustomerByID();

	#$test4 = new TestingScipts();
	$TESTING4 = $test->test_getSearchResults();

	#$test5 = new TestingScipts();
	$TESTING5 = $test->test_filterResults(); 
//Test 3 ACTUAL 
//Test reister New User
//Test getCustomerbyID() to check the customer got added 
//Test deleted customer 
//Re-test getCustomerbyID() to check that the customer got deleted 

	#$test6 = new TestingScipts();
	$TESTING6 = $test->test_registerNewUser();//need to make this 

	$TESTING7 = $test->test_updateShipping();

	$TESTING8 = $test->test_updateBilling(); //need to make this 

	$TESTING9 = $test->test_getShippingByID(); 

	$TESTING10 = $test->test_getBillingByID(); 


?>