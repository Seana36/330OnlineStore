<?php 
require "./includes/dbConnect.php";
session_start();
$username = $_POST["username"];
$password = $_POST["password"]; 
$sql = "SELECT username, customerID FROM customer WHERE customerID = (SELECT customerID FROM customer WHERE username = '$username' AND password ='$password')"; 
$result = $conn->query($sql);
if (!$result){
	die("query failed" . $conn->error);
}
$entry = $result->fetch_row();
if($entry > 0)
{
	$_SESSION['loggedIn'] = TRUE;
$_SESSION["name"] = $entry[0] . " " . $entry[1];
$_SESSION["customer"] = $entry[2];
header('Location:homeController.php');
}

else
{
	$username = $_POST["username"];
	$password = $_POST["password"];
	$sql = "SELECT username, employeeID FROM employee WHERE employeeID = (SELECT employeeID FROM employee WHERE username = '$username' AND password ='$password')"; 
	$result = $conn->query($sql);
	if (!$result){
		die("query failed" . $conn->error);
	}
	if($entry > 0)
	{
		$_SESSION['loggedIn'] = TRUE;
		$_SESSION['employeeAccount'] = TRUE;
		$_SESSION["name"] = $entry[0] . " " . $entry[1];
		$_SESSION["employee"] = $entry[2];
		header('Location:homeController.php');
	}
	
	else{
		header('Location:loginPage.php');
		echo"<p style = 'color:red'>Incorrect login.</p>";
	}
	
}

?>