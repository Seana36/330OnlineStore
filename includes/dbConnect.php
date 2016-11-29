<?php
$conn = new mysqli("localhost", "root", "", "StoreDatabase");
if($conn->connect_error){
	die("connection failed: " . $conn->connect_error);
}

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "StoreDatabase";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error) {
	die("Connection Failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>