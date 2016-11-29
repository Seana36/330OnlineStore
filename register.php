<?php
require "./includes/dbConnect.php";

$userName = $_POST["username"];
$fName = $_POST["fName"];
$lName = $_POST["lName"];
$password = $_POST["password"];
$email = $_POST["email"];
$phoneNo = $_POST["phoneNo"];
$securityQuestion = $_POST["securityQuestion"];
$securityQuestionAns = $_POST["securityQuestionAns"];


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
	$query = "INSERT INTO customer(fname, lname, userName, password, email, phoneNo, securityQuestion, securityQuestionAns) VALUES('$fName', '$lName', '$userName', '$password', '$email', '$phoneNo', '$securityQuestion', '$securityQuestionAns')";
	$res = $conn->query($query);
	if(!$res)
		echo "Insert Query Failed";
	else
		echo "User added";
}

?>