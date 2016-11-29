<?php
require "./includes/dbConnect.php";

$username = $_POST["username"];
$fName = $_POST["fName"];
$lName = $_POST["lName"];
$password = $_POST["password"];
$email = $_POST["email"];
$phoneNo = $_POST["phoneNo"];
$securityQuestion = $_POST["securityQuestion"];
$securityQuestionAns = $_POST["securityQuestionAns"];


$sql = "SELECT position, fName, lName, customerID FROM customer WHERE customerID = (SELECT customerID FROM customer WHERE username = '$username');";

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
	$query = "INSERT INTO customer(fName, lName, userName, password, email, phoneNo, securityQuestion, securityQuestionAns) VALUES('$fName', '$lName', '$userName', '$password', '$email', '$phoneNo', '$securityQuestion', '$securityQuestionAns'";
	$res = mysql_query($query);
}

?>