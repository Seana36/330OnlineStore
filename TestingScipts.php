<?php 
    require_once('./includes/DAOs.php');
    require_once('./includes/DTOs.php');
    
class TestingScipts{

	function test_getAllItems(){
		echo "Testing getAllItems() <br>"	;
		$test1 = new itemDAO(); 
		$TESTING1 = $test1->getAllItems();
		if($TESTING1 != null){
			echo "Test worked <br>";
			echo "Expecting size of 40 <br>";
			echo "Actual Size: " . count($TESTING1). "<br>";
			echo "------------------------------------------------------------------------<br>";
		}
		else {
			echo "Test didnt work <br>";
			echo "Expecting size of 40 <br>";
			echo "Actual Size: " . count($TESTING1). "<br>";
			echo "------------------------------------------------------------------------<br>";

		}
	}

	function test_getAllCategories(){
		echo "Testing getAllCategories() <br> ";
		$test1 = new itemDAO(); 
		$TESTING1 = $test1->getAllCategories();
		if($TESTING1 != null){
			echo "Test worked <br>";
			echo "Expecting size of 3 <br>";
			echo "Actual Size: " . count($TESTING1). "<br>";
			echo "------------------------------------------------------------------------<br> ";
		}
		else {
			echo "Test didnt work <br>";
			echo "Expecting size of 3 <br>";
			echo "Actual Size: " . count($TESTING1). "<br>";
			echo "------------------------------------------------------------------------<br>";
		}

	}

	function test_getCustomerByID(){
		$test3 = new itemDAO(); 
		$TESTING3 = $test3->getCustomerByID(1);
		if($TESTING3->customerID == 1)
		{
			echo "Testing getCustomerByID()<br>";
			echo "Test worked<br>";
			echo "Expecting ID 1 in object<br>";
			echo "Received: $TESTING3->customerID <br>";
			echo "First: $TESTING3->fName<br>";
			echo "Last: $TESTING3->lName<br>";
			echo "Userame: $TESTING3->userName<br>";
			echo "Password: $TESTING3->password<br>";
			echo "Email: $TESTING3->email<br>";
			echo "Phone: $TESTING3->phoneNo<br>";
			echo "Security Question: $TESTING3->securityQuestion<br>";
			echo "Security Answer: $TESTING3->securityQuestionAns<br>";
			echo "------------------------------------------------------------------------<br>";
		}
		else
		{
		}
	}

	function test_getSearchResults(){
		echo "Testing getSearchResults() with parameters 'HP' <br>";
		$test4 = new itemDAO();
		$TESTING4 = $test4->getSearchResults('hp');
		if(count($TESTING4) == 3){
			echo "Test 4 Worked <br>
				  <b> Expecting results: </b><br>";
			echo "HP Stream 14' Premium Laptop <br>
				  HP K2500 Wireless Keyboard US <br>
				  HP Pavilion 21.5-Inch Monitor <br>";
			echo "<b>Actual results: </b><br>";
			session_start(); 
			$_SESSION['items'] = $TESTING4; 
			for($i = 0; $i<count($TESTING4); $i++){
		     	$item = $TESTING4[$i];
				echo $item->itemName;
				echo '<br>';
			}
			echo "------------------------------------------------------------------------<br>";
		}
		else {
			echo "Test failed";
			echo "------------------------------------------------------------------------<br>";
		}

	}

	function test_filterResults(){ //4 results 
		echo "Testing filterResults() with parameters:  <br>";
		$test5 = new itemDAO(); 
		$TESTING5 = $test5->filterResults(1, 'Technology');  
		$_SESSION['items'] = $TESTING5; 
		if(count($TESTING5) == 4 ){
			echo "Test 5 Worked <br>
				 <b> Expecting results: </b><br>
				  2. TeckNet 2.4G Nano Wireless Mouse <br>
				  10. HP K2500 Wireless Keyboard US <br>
				  46. Walkman <br>
				  49. USB 3.0 16GB  <br> "; 
			echo "<b>Actual results: </b><br>";
			for($i = 0; $i<count($TESTING5); $i++){
		     	$item = $TESTING5[$i];
		     	echo $item->itemID . ". ";
				echo $item->itemName;
				echo '<br>';
			}
			echo "------------------------------------------------------------------------<br>";
		}
		else{
			echo "Test Failed <br>";
			echo "------------------------------------------------------------------------<br>";
		}
	}

	function test_registerNewUser(){
		echo "Testing registerNewUser() with paramaters: <br>
				userName: SeanTaylor7 <br>
				fName: Sean <br>
				lName: Taylor <br>
				password: p@ssw0rd <br>";
		$test6 = new itemDAO(); 
		$userName = 'SeanTaylor7';
		$fName = 'Sean';
		$lName = 'Taylor';
		$password ='p@ssw0rd';
		$email = 'something@gmail.com';
		$phoneNo = 2034941111; 
		$securityQuestion = 'What is your favorite class?';
		$securityQuestionAns = 'CSC 330';
		$TESTING6 = $test6->registerNewUser($userName, $fName, $lName, $password, $email, $phoneNo, $securityQuestion, $securityQuestionAns);
		 #echo "count: ". count($TESTING6). '<br>';
		 if($TESTING6 == TRUE){
		 	echo "Test Worked, User was added Successfully <br>";
		 	echo "------------------------------------------------------------------------<br>";
		 }
		 else {
		 	echo "<br>Test did not work <br>";
		 	echo "------------------------------------------------------------------------<br>";
		 }
		 removeFromDB("DELETE FROM customer WHERE userName = '$userName';", "SELECT * FROM customer WHERE userName = '$userName';");
	}

	function test_updateShipping()
	{
		echo "Testing updateShipping to update the shipping of the user with CustomerID 1<br>";
		$test7 = new itemDAO();
		$TESTING7 = $test7->updateShipping(1, "111 testAddress St", "Bridgeport", "CT", 101010);
		if($TESTING7)
		{
			echo "The information was successfully updated<br>";
		 	echo "------------------------------------------------------------------------<br>";
		}
	}

	function test_updateBilling()
	{
		echo "Testing updateBilling to update the billing of the user with CustomerID 1<br>";
		$test8 = new itemDAO();
		$TESTING8 = $test8->updateBilling(1, "111 testAddress St", "Bridgeport", "CT", 10101, 1234567812, "VISA", 919);
		if($TESTING8)
		{
			echo "The information was successfully updated<br>";
		 	echo "------------------------------------------------------------------------<br>";
		}
	}

	function test_getShippingByID()
	{
		echo "Testing getShippingByID to get the shipping of the user with CustomerID 1<br>";
		$test9 = new itemDAO();
		$TESTING9 = $test9->getShippingByID(1);
		if($TESTING9->customerID == 1)
		{
			echo "The information was successfully retrieved<br>";
			echo "Address: $TESTING9->shipAdd<br>";
			echo "City: $TESTING9->shippingCity<br>";
			echo "State: $TESTING9->shippingState<br>";
			echo "Zip: $TESTING9->shippingZipcode<br>";
		 	echo "------------------------------------------------------------------------<br>";
		}
	}

	function test_getBillingByID()
	{
		echo "Testing getBillingByID to get the billing of the user with CustomerID 1<br>";
		$test10 = new itemDAO();
		$TESTING10 = $test10->getBillingByID(1);
		if($TESTING10->customerID == 1)
		{
			echo "The information was successfully retrieved<br>";
			echo "Address: $TESTING10->billingAddress<br>";
			echo "City: $TESTING10->billingCity<br>";
			echo "State: $TESTING10->billingState<br>";
			echo "Zip: $TESTING10->billingZipcode<br>";
			echo "Card No: $TESTING10->creditCardNo<br>";
			echo "Card Type: $TESTING10->creditCardType<br>";
			echo "CVC: $TESTING10->creditCardCVC<br>";
		 	echo "------------------------------------------------------------------------<br>";
		}
	}

}
?>