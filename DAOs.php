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
            $item->image = $row['image'];
            $item->itemName = $row['itemName'];
            $item->itemDescription = $row['itemDescription'];
            $item->regularPrice = $row['regularPrice'];
            $item->salePrice = $row['salePrice'];
            #continue for all columns 
            array_push($items_array, $item); 
        }
        return $items_array; 
    }

public getItemByID(){
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
    $sql = "SELECT * FROM item WHERE itemID = ".$item .""; 
                $result = $conn -> query($sql);
    $item = new itemDTO();

}



  }  
?>