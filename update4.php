<?php
session_start();
require_once "connection.php";
require_once "checkloger.php";

if(isset($_POST["save_details"])){

	$playerId = $_POST["playerId"];
	$playerName = addslashes(ucfirst($_POST["playerName"]));
	$teamId = $_POST["teamId"];
	$height = addslashes($_POST["height"]);
	$weight = addslashes($_POST["weight"]);
	$age = addslashes($_POST["age"]);

	$update_user = "UPDATE `users` SET `Full_Name`='$Full_Name', `email`='$email', `phone_Number`='$phone_Number', `User_Name`='$User_Name', `Password`='$Password', `UserType`='$UserType', `Address`='$Address' WHERE userId='$userId'";

$update_user = "UPDATE `players` SET `playerName`='$playerName',`teamId`='$teamId',`height`='$height',`weight`='$weight',`age`='$age' WHERE playerId='$playerId' ";

	
	if($conn->query($update_user) === TRUE){
		header("Location: players2.php");
		exit();
	}else{
		echo "Error: " . $update_user . " ON " . $conn->error;
	}
}
?>
