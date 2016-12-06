<?php 
    require_once('./includes/DAOs.php');
    require_once('./includes/DTOs.php');
    
class TestingScipts{

	function test_getAllItems(){
		echo "Testing getAllItems() <br>"	;
		$test1 = new itemDAO(); 
		$TESTING1 = $test1->getAllItems();
		if($TESTING1 != null){
			echo "Test worked";
		}
		else 
			echo "Test didnt work";
	}


}
?>