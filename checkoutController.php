<?php 
    include('./includes/DAOs.php');
    require_once('./includes/DTOs.php');
	
	$itemDAO = new itemDAO(); 
#	$customer = $itemDAO->getCustomerByID(5); 
	session_start(); 
	$customer = $_SESSION['customer'] ;
	#var_dump($_SESSION['customer']);
	#for($i = 0; $i<count($customer); $i++){
     #      $cust = $customer[$i];
	#		$custID = $cust->customerID; 
	#	}
	echo "CUSTOMER ID: ". $customer; 
	$customerShipping = $itemDAO->getShippingByID2($customer);
	$_SESSION['shippingInfo'] = $customerShipping;

	$customerBilling = $itemDAO->getBillingByID2($customer);
	$_SESSION['billingInfo'] = $customerBilling; 
	#var_dump($_SESSION['customer']);
	#var_dump($custID);
	#var_dump($_SESSION['shippingInfo']);
	#var_dump($_SESSION['billingInfo']);
	header('location:checkout.php'); 
?>