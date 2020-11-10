<?php
session_start();
require_once "connection.php";
require_once "checkloger.php";

if(isset($_POST["save_details"])){

	$userId = $_POST["userId"];
	$Full_Name = addslashes(ucfirst($_POST["Full_Name"]));
	$email = addslashes(strtolower($_POST["email"]));
	$User_Name = addslashes($_POST["User_Name"]);
	$Password = addslashes(md5($_POST["Password"]));
	$phone_Number = addslashes($_POST["phone_Number"]);
	$UserType = addslashes($_POST["UserType"]);
	$Address = addslashes($_POST["Address"]);

	$update_user = "UPDATE `users` SET `Full_Name`='$Full_Name', `email`='$email', `phone_Number`='$phone_Number', `User_Name`='$User_Name', `Password`='$Password', `UserType`='$UserType', `Address`='$Address' WHERE userId='$userId'";

	$update_status = "UPDATE users SET  AccessTime = now() WHERE userId = '$userId' LIMIT 1";
	
	if($conn->query($update_user) === TRUE){
		header("Location: profile2.php");
		exit();
	}else{
		echo "Error: " . $update_user . " ON " . $conn->error;
	}
}
?>
