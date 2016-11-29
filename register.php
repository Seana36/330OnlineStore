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
	#INSERT INTO `customer`(`customerID`, `fName`, `lName`, `userName`, `password`, `email`, `phoneNo`, `secuirtyQuestion`, `secuirtyQuestionAns`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9])
	$query = "INSERT INTO`customer`( `fName`, `lName`, `userName`, `password`, `email`, `phoneNo`, `secuirtyQuestion`, `secuirtyQuestionAns`) VALUES('$fName', '$lName', '$userName', '$password', '$email', $phoneNo, '$securityQuestion', '$securityQuestionAns')";
	#INSERT INTO `customer`( `fName`, `lName`, `userName`, `password`, `email`, `phoneNo`, `secuirtyQuestion`, `secuirtyQuestionAns`) VALUES ('hello','hello','hello','hello','hello',123,'hello','hello')
#echo $userName . " 1<br>" ;
#echo $fName. " 2<br>" ;;
#echo $lName . " 3<br>" ;
#echo $password . " 4<br>" ;
#echo $email . " 5<br>" ;
#echo $phoneNo. " 6<br>" ;
#echo $securityQuestion . " 7<br>" ;
#echo $securityQuestionAns . " 8<br>" ;
	#$res = $conn->query($query);
	if (!$conn->query($query)){
	die("query1 failed:" . $conn->error);
}
#	// if(!$res)
#	// 	echo "Insert Query Failed";
#	// else
#	// 	echo "User added";
}

?>