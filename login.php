<?php 
require "./includes/dbConnect.php";

$username = $_POST["username"];
$password = $_POST["password"]; 

$sql = "SELECT  fName, lName, customerID FROM customer WHERE customerID = (SELECT customerID FROM customer WHERE username = '$username' AND password ='$password')"; 

$result = $conn->query($sql);
if (!$result){
	die("query failed" . $conn->error);
}
$entry = $result->fetch_row();

$_SESSION["name"] = $entry[0] . " " . $entry[1];
$_SESSION["customer"] = $entry[2];



?>