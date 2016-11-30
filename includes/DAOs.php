<?php 
include('DTOs.php');
class itemDAO{
    #data access objects 
    public function getAllItems(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "StoreDatabase";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        else{   
            echo "";
        } 
        $items_array = array(); 
        $sql = "SELECT * FROM item"; 
        $result = $conn -> query($sql);
        while($row = $result->fetch_assoc()) { 
            $item = new itemDTO();
            $item->itemID = $row['itemID'] ; 
            $item->itemName = $row['itemName'];
            $item->itemDescription = $row['itemDescription'];
            $item->regularPrice = $row['regularPrice'];
            $item->salePrice = $row['salePrice'];
            $item->sale = $row['sale'];
            $item->quantity = $row['quantity'];
            $item->categoryID = $row['categoryID'];
            $item->clearance = $row['clearance'];
            $item->image = $row['image'];
            array_push($items_array, $item); 
        }
        return $items_array; 
    }


    public function getSearchResults($searchFor){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "StoreDatabase";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        else{   
            echo "";
        } 
        $items_array = array(); 
        $sql = "SELECT * FROM item WHERE itemName LIKE '%".$searchFor."%'";
        $result = $conn -> query($sql);
        while($row = $result->fetch_assoc()) { 
            $item = new itemDTO();
            $item->itemID = $row['itemID'] ; 
            $item->itemName = $row['itemName'];
            $item->itemDescription = $row['itemDescription'];
            $item->regularPrice = $row['regularPrice'];
            $item->salePrice = $row['salePrice'];
            $item->sale = $row['sale'];
            $item->quantity = $row['quantity'];
            $item->categoryID = $row['categoryID'];
            $item->clearance = $row['clearance'];
            $item->image = $row['image']; 
            array_push($items_array, $item); 
        }
        return $items_array; 
    }

    public function filterResults($searchFor, $cat){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "StoreDatabase";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        else{   
            echo "";
        } 
        $items_array = array(); 


        if($searchFor == '1'){
            $num1 = 0;
            $num2 = 100; 
            $between = "regularPrice BETWEEN $num1 AND $num2";
        }   
        else if($searchFor == '2'){
            $num1 = 101; 
            $num2 = 200; 
            $between = "regularPrice BETWEEN $num1 AND $num2";
        } 
        else if($searchFor == '3'){
            $num1 = 201; 
            $num2 = 600;
            $between = "regularPrice BETWEEN $num1 AND $num2"; 
        }
        else if($searchFor == '4'){
            $num1 = 601; 
            $num2 = 1000000; 
            $between = "regularPrice BETWEEN $num1 AND $num2";
        }
        else {
            $between = "regularPrice BETWEEN 0 AND 1000000";
        }
        if($cat == "Technology"){
            #$catID = 1;
            $category = "categoryID=1";
        }
        else if($cat == "Fragrances"){
            #$catID = 2; 
            $category = "categoryID=2";
        }
        else if($cat == "Fruit"){
            #$catID = 3; 
            $category = "categoryID=3";
        }
        else {
            $category = "categoryID =1 OR categoryID=2 OR categoryID=3";
        }
        
       # echo $catID. "<br>";
        #SELECT * FROM `item` WHERE regularPrice BETWEEN 0 AND 100 AND categoryID = 1
        $sql = "SELECT * FROM `item` WHERE $between AND $category"; 
        
        $result = $conn -> query($sql);
        while($row = $result->fetch_assoc()) { 
            $item = new itemDTO();
            $item->itemID = $row['itemID'] ; 
            $item->itemName = $row['itemName'];
            $item->itemDescription = $row['itemDescription'];
            $item->regularPrice = $row['regularPrice'];
            $item->salePrice = $row['salePrice'];
            $item->sale = $row['sale'];
            $item->quantity = $row['quantity'];
            $item->categoryID = $row['categoryID'];
            $item->clearance = $row['clearance'];
            $item->image = $row['image']; 
            array_push($items_array, $item); 
        }
        return $items_array; 
    }

    public function registerNewUser($userName, $fName, $lName, $password, $email, $phoneNo, $securityQuestion, $securityQuestionAns){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "StoreDatabase";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        else{   
            echo "";
        } 
       # $items_array = array(); 
        $sql = "SELECT fname, lname, customerID FROM customer WHERE customerID = (SELECT customerID FROM customer WHERE userName = '$userName');";

        $result = $conn->query($sql);

        if (!$result){
            die("query failed" . $conn->error);
        }
        $entry = $result->fetch_row();
        if($entry)
        {
            echo "User already exists";
        }
        else
        {
            $query = "INSERT INTO`customer`( `fName`, `lName`, `userName`, `password`, `email`, `phoneNo`, `securityQuestion`, `securityQuestionAns`) VALUES('$fName', '$lName', '$userName', '$password', '$email', $phoneNo, '$securityQuestion', '$securityQuestionAns')";
            if (!$conn->query($query)){
                die("query1 failed:" . $conn->error);
            }
        }
    }
  }  
?>