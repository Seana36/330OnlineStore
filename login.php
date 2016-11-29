<?php 
require "./includes/dbConnect.php";

$username = $_POST["username"];

$sql = "SELECT position, fName, lName, employeeID FROM employee WHERE employeeID = (SELECT employeeID FROM account WHERE username = '$username');"; 

$result = $conn->query($sql);
if (!$result){
	die("query failed" . $conn->error);
}
$entry = $result->fetch_row();
$position = $entry[0];
$_SESSION["user"] = $entry[1] . " " . $entry[2];
$_SESSION["userID"] = $entry[3];

switch($position){
	case "Product Manager":
		echo "Location:pmindex.html";
		break;
	default:
		echo "You've entered an incorrect username or password!";
}

$sql = "SELECT position, fName, lName, customerID FROM customer WHERE customerID = (SELECT customerID FROM customer WHERE username = '$username');"; 

$result = $conn->query($sql);
if (!$result){
	die("query failed" . $conn->error);
}
$entry = $result->fetch_row();
$position = $entry[0];
$_SESSION["user"] = $entry[1] . " " . $entry[2];
$_SESSION["userID"] = $entry[3];

switch($position){
	case "NULL":
		echo "Location:index.html";
		echo "Login Successful";
		break;
	default:
		echo "You've entered an incorrect username or password!";
}
?> 