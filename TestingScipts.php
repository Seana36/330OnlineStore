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
		}
		else {
			echo "Test didnt work <br>";
			echo "Expecting size of 40 <br>";
			echo "Actual Size: " . count($TESTING1). "<br>";
		}
	}

	function test_getAllCategories(){
		echo "Teseting getAllCategories() <br> ";
		$test1 = new itemDAO(); 
		$TESTING1 = $test1->getAllItems();

	}


}
?>