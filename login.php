<?php 
require "./includes/dbConnect.php";

$username = $_POST["username"];
$password = $_POST["password"]; 

$sql = "SELECT  fName, lName, customerID FROM customer WHERE customerID = (SELECT customerID FROM customer WHERE username = '$username' AND password ='$password');"; 

$result = $conn->query($sql);
if (!$result){
	die("query failed" . $conn->error);
}
$entry = $result->fetch_row();
#$position = $entry[0];
#echo $entry[3];
 #$_SESSION["name"] = $entry[1] . " " . $entry[2];
 #$_SESSION["customer"] = $entry[3];
#echo "Location:homeController.php";


?>