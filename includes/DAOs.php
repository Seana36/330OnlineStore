<?php 
require_once('DTOs.php');
##GLOBAL FUNCTIONS


/*
--------------------------------------------------------------------------
-----PRE: Requires information to add
-----     Table to add to
-----PURPOSE: Adds data to database
-----PARAMETERS:
-----sqlCheck is the sql code used to check if your item already exist
-----EX: sqlCheck = "SELECT * FROM item WHERE itemName == . $newItemName .;"
-----EXcont: if(above == TRUE){ don't add } else{add to db}
-----sql parameter takes in the insertion
-----EX: sql = "INSERT INTO item ( itemName, itemDescription, regularPrice, categoryID) VALUES (name, desc, price, category);"
-----EXcont: function returns boolean of added
--------------------------------------------------------------------------
*/
function addToDB($sql, $sqlCheck)
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "StoreDatabase";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }
    else
    {
        echo "";
    }
    $result = $conn->query($sqlCheck);
    if(!$result)
    {
        echo "Results broken </br>";
        return FALSE;
    }
    if($result->num_rows > 0)
    {
        echo "The item already exist</br>";
        return FALSE;
    }
    else
    {
        $conn->query($sql);
        echo "Successfully added the item</br>";
        return TRUE;
    }
}

/*
--------------------------------------------------------------------------
-----PRE: Requires information to remove
-----     Table to remove from
-----PURPOSE: Removes data from database
-----PARAMETERS:
-----sqlCheck is the sql code used to check if your item already exist
-----EX: sqlCheck = "SELECT * FROM item WHERE itemName == . $newItemName .;"
-----EXcont: if(above == TRUE){ return doesn't exist } else{remove from db}
-----sql parameter takes in the deletion
-----EX: sql = "DELETE FROM item WHERE itemName = 'name';"
-----EXcont: function returns boolean of removed
--------------------------------------------------------------------------
*/
function removeFromDB($sql, $sqlCheck)
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "StoreDatabase";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }
    else
    {
        echo "";
    }
    $result = $conn->query($sqlCheck);
    if(!$result)
    {
        echo "Results broken </br>";
        return FALSE;
    }
    if($result->num_rows == 0)
    {
        //echo "The item does not exist</br>";
        return FALSE;
    }
    else
    {
        $conn->query($sql);
        //echo "Successfully removed the item</br>";
        return TRUE;
    }
}

/*////////////////////////////////////////////////////////////////////////////////*/
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


    public function getAllCategories()
    {
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
        $categoryArray = array();
        $sql = "SELECT * FROM Category";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc())
        { 
            $category = new categoryDTO();
            $category->categoryID = $row["categoryID"];
            $category->details = $row["details"];
            $category->categoryName = $row["categoryName"];
            array_push($categoryArray, $category); 
        }
        return $categoryArray;

    }

    public function getCustomerByID($searchFor)
    {
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
        $sql = "SELECT * FROM Customer WHERE customerID = '$searchFor';";
        $result = $conn->query($sql);
        if($row = $result->fetch_assoc())
        {
            $customer = new customerDTO();
            $customer->customerID = $row["customerID"];
            $customer->fName = $row["fName"];
            $customer->lName = $row["lName"];
            $customer->userName = $row["userName"];
            $customer->password = $row["password"];
            $customer->email = $row["email"];
            $customer->phoneNo = $row["phoneNo"];
            $customer->securityQuestion = $row["securityQuestion"];
            $customer->securityQuestionAns = $row["securityQuestionAns"];
        }
        return $customer;
    }


    public function getShippingByID($searchFor)
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "StoreDatabase";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }
        else
        {   
            echo "";
        } 
        $shippingArray = array();
        $sql = "SELECT * FROM shippinginformation s, customer c WHERE c.customerID = '$searchFor';";
        $result = $conn->query($sql);
        if($row = $result->fetch_assoc())
        {
            $shipping = new shippingDTO();
            $shipping->shippingID = $row["shippingID"];
            $shipping->customerID = $row["customerID"];
            $shipping->shipAdd = $row["shipAdd"];
            $shipping->shippingCity = $row["shippingCity"];
            $shipping->shippingState = $row["shippingState"];
            $shipping->shippingZipcode= $row["shippingZipcode"];
            $shipping->fName =$row['fName'];
            $shipping->lName =$row['lName'];
             array_push($shippingArray, $shipping); 
        }
        return $shippingArray;
    }

     public function getBillingByID($searchFor)
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "StoreDatabase";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }
        else
        {   
            echo "";
        } 
        $billingArray = array();
        $sql = "SELECT * FROM billinginformation b, customer c WHERE c.customerID = '$searchFor';";
        $result = $conn->query($sql);
        if($row = $result->fetch_assoc())
        {
            $billing = new billingDTO();
            $billing->billingID = $row["billingID"];
            $billing->customerID = $row["customerID"];
            $billing->billingAddress = $row["billingAddress"];
            $billing->billingCity = $row["billingCity"];
            $billing->billingState = $row["billingState"];
            $billing->billingZipcode= $row["billingZipcode"];
            $billing->creditCardNo = $row["creditCardNo"];
            $billing->creditCardType = $row["creditCardType"];
            $billing->creditCardCVC = $row["creditCardCVC"];
            $billing->fname = $row["fName"];
            $billing->lName = $row["lName"];
           
             array_push($billingArray, $billing); 
        }
        return $billingArray;
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

        if (!$result)
        {
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
            return TRUE;
        }
    }

    public function updateShipping($customerID, $shipAdd, $shippingCity, $shippingState, $shippingZipcode)
      {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "StoreDatabase";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) 
        {
            die("Connection failed: " . $conn->connect_error);
        }
        else
        {   
            echo "";
        } 


       
        $sql = "UPDATE  shippinginformation SET shipAdd='$shipAdd', shippingCity = '$shippingCity', shippingState = '$shippingState', shippingZipcode = $shippingZipcode WHERE (customerID='$customerID')";

        if (mysqli_query($conn, $sql)) 
        {
            //echo "Record updated successfully";
            return TRUE;
        }           
        else 
        {
             echo "Error updating record: " . mysqli_error($conn);
             return FALSE;
        }
                
    }

    public function updateBilling($customerID, $billingAddress, $billingCity, $billingState, $billingZipcode, $creditCardNo, $creditCardType, $creditCardCVC)
      {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "StoreDatabase";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) 
        {
            die("Connection failed: " . $conn->connect_error);
        }
        else
        {   
            echo "";
        } 


       
        $sql = "UPDATE  billinginformation SET billingAddress='$billingAddress', billingCity='$billingCity', billingState='$billingState', billingZipcode='$billingZipcode', creditCardNo = $creditCardNo, creditCardType = '$creditCardType', creditCardCVC='$creditCardCVC' WHERE (customerID=$customerID)";

        if (mysqli_query($conn, $sql)) 
        {
            //echo "Record updated successfully";
            return TRUE;
        }           
        else 
        {
             echo "Error updating record: " . mysqli_error($conn);
             return FALSE;
        }
                
    }

    public function addOrder(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "StoreDatabase";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error)
        {
            die("Connection failed: " . $conn->connect_error);
        }
        else
        {
            echo "";
        }
       # start_session(); 
        $newOrder = $_SESSION['shopping_cart']; 
        $customer = $_SESSION['customer'];
        $shipping = $_SESSION['shippingInfo'];
        $billing =  $_SESSION['billingInfo'];
     #   var_dump($newOrder);
     #   var_dump($customer);
     #   var_dump($shipping);
     #   var_dump($billing);

       # $cust = $_SESSION['billingInfo']; 
        #for($i = 0; $i<1; $i++){
        foreach($_SESSION["shopping_cart"] as $keys => $values) {
           # $customer = $cust[$i];
            $newOrd = $newOrder[1];
            #$cust   = $customer[$i];
            $ship   = $shipping[0];
            $bill   = $billing[0];
      #      echo "<br>". $ship->customerID ;
       #     echo "<br>". date('Y-m-d h:i:s') ;
        #    echo "<br>". $values["itemID"];
         #   echo "<br>". $values["quantity"];
#INSERT INTO `order`(`itemID`, `quantity`, `status`, `customerID`, `billingID`, `shippingID`) VALUES (12,3,'IDK',1,1,1)
          $sql = "INSERT INTO `order`( `itemID`, `quantity`, `orderDate`, `status`, `customerID`, `billingID`, `shippingID`) VALUES (".$values['itemID'].",".$values['quantity'].", '".date('Y-m-d h:i:s')."' ,'Just Ordered',".$ship->customerID.",".$bill->billingID.",".$ship->shippingID.")" ;
            #  $result = $conn->query($sql);
        if (mysqli_query($conn, $sql)) 
        {
            //echo "Record updated successfully";
            echo "updated successfully";
            return TRUE; 
        }           
        else 
        {
             echo "Error updating record: " . mysqli_error($conn);
             return FALSE; 
             
        }
        }



    }//end addOrder() 

}

?>