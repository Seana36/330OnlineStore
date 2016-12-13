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
#		$test3 = new itemDAO(); 
#		$TESTING3 = $test3->getAllItems(1);
#		if ($customer->customerID == 1){
#			echo "I think it worked";
#		}
#		else {
#			echo "didnt work"; 
#		}
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
				userName: SeanTaylor# <br>
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
		 if($TESTING6 == 1){
		 	echo "Test Worked, User was added Successfully <br>";
		 	echo "------------------------------------------------------------------------<br>";
		 }
		 else {
		 	echo "<br>Test did not work <br>";
		 	echo "------------------------------------------------------------------------<br>";
		 }
	}

	function test_getCustomerByUserName(){
		echo "Testing getCustomerByUserName() with previous paramaters";
		$userName = 'SeanTaylor7';
		$test7 = new itemDAO();
		$TESTING7 = $test7->getCustomerByUserName($userName);
		if($TESTING7 != null){
			echo "Test worked <br>";
			echo "<b>Expecting </b><br>
				  userName: " . $userName . '<br>
				  fName: Sean <br>';
			#session_start(); 
			$_SESSION['items'] = $TESTING7; 
			for($i = 0; $i<count($TESTING7); $i++){
		     	$item = $TESTING7[$i];
		     	echo "<b>Actual Results: </b><br>";
				echo $item->userName. '<br>';
				echo $item->fName . '<br>'; 
				echo '<br>';
			}
			echo "------------------------------------------------------------------------<br> ";
		}
		else {
			echo "Test didnt work <br>";
			echo "------------------------------------------------------------------------<br>";
		}

	}

}
?>