<?php 
require "./includes/dbConnect.php";
session_start();
$username = $_POST["oldusername"];
$password = $_POST["oldpassword"]; 
$newusername = $_POST["newusername"];
$newpassword = $_POST["newpassword"];
$newfname = $_POST["newfName"];
$newlname = $_POST["newlName"];
$newEmail = $_POST["newEmail"];
$newPhoneNo = $_POST["NewPhoneNo"];
$newSecQ = $_POST["newSecurityQuestion"];
$newSecAns = $_POST["newSecurityQuestionAns"];

if(!empty($username) AND !empty($password))
{
	if(!empty($newusername))
	{
		$sql = "UPDATE customer SET username = '$newusername' WHERE customerID = (SELECT customerID FROM customer WHERE username = '$username' AND password ='$password')";
		$result = $conn->query($sql);
	}
	
	if(!empty($newpassword))
	{
		$sql = "UPDATE customer SET password = '$newpassword' WHERE customerID = (SELECT customerID FROM customer WHERE username = '$username' AND password ='$password')";
		$result = $conn->query($sql);
	}
	
	if(!empty($newfname))
	{
		$sql = "UPDATE customer SET fName = '$newfname' WHERE customerID = (SELECT customerID FROM customer WHERE username = '$username' AND password ='$password')";
		$result = $conn->query($sql);
	}
	
	if(!empty($newlname))
	{
		$sql = "UPDATE customer SET lName = '$newlname' WHERE customerID = (SELECT customerID FROM customer WHERE username = '$username' AND password ='$password')";
		$result = $conn->query($sql);
	}
	
	if(!empty($newEmail))
	{
		$sql = "UPDATE customer SET  email = '$newEmail' WHERE customerID = (SELECT customerID FROM customer WHERE username = '$username' AND password ='$password')";
		$result = $conn->query($sql);
	}
	
	if(!empty($newPhoneNo))
	{
		$sql = "UPDATE customer SET phoneNo = '$newPhoneNo' WHERE customerID = (SELECT customerID FROM customer WHERE username = '$username' AND password ='$password')";
		$result = $conn->query($sql);
	}
	
	if(!empty($newSecQ))
	{
		$sql = "UPDATE customer SET securityQuestion = '$newSecQ' WHERE customerID = (SELECT customerID FROM customer WHERE username = '$username' AND password ='$password')";
		$result = $conn->query($sql);
	}
	
	if(!empty($newSecAns))
	{
		$sql = "UPDATE customer SET securityQuestionAns = '$newSecAns' WHERE customerID = (SELECT customerID FROM customer WHERE username = '$username' AND password ='$password')";
		$result = $conn->query($sql);
	}
	header("Location:editProfilePage.php");
}

else
{
	header('Location:editProfilePage.php');
	echo"<p type = 'color:red'>Failed to input current Username and Password</p>";
}
?>