<?php 
require "./includes/dbConnect.php";
$username = $_POST["username"];
$password = $_POST["password"]; 
<<<<<<< HEAD
$sql = "SELECT  fName, lName, customerID FROM customer WHERE customerID = (SELECT customerID FROM customer WHERE username = '$username' AND password ='$password')"; 
=======

$sql = "SELECT  fName, lName, customerID FROM customer WHERE customerID = (SELECT customerID FROM customer WHERE username = '$username' AND password ='$password');"; 

>>>>>>> refs/remotes/origin/master
$result = $conn->query($sql);
if (!$result){
	die("query failed" . $conn->error);
}
$entry = $result->fetch_row();
#$position = $entry[0];
#echo $entry[3];
<<<<<<< HEAD
$count = mysql_num_rows($result);
if($count == 1)
{
	$_SESSION['is_logged'] = true;
	$_SESSION["name"] = $entry[0] . " " . $entry[1];
	$_SESSION["customer"] = $entry[2];
	echo "Login Successful";
	header("Location:homeController.php");
}
else
{
	echo "Wrong username or password";
	header("Location:loginPage.php");
}
#$_SESSION["name"] = $entry[0] . " " . $entry[1];
#$_SESSION["customer"] = $entry[2];
#header("Location:homeController.php");
=======
 #$_SESSION["name"] = $entry[1] . " " . $entry[2];
 #$_SESSION["customer"] = $entry[3];
#echo "Location:homeController.php";


>>>>>>> refs/remotes/origin/master
?>