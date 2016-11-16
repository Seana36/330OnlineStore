<?php
$conn = new mysqli("localhost", "root", "", "StoreDatabase");
if($conn->connect_error){
	die("connection failed: " . $conn->connect_error);
}

session_start();
?>