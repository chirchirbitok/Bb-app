<?php
session_start();
require_once "connection.php";
require_once "checkloger.php";
if(isset($_POST["save_details"])){
	$coachId = $_POST["coachId"];
	$coachName = addslashes(ucfirst($_POST["coachName"]));
	$teamId = $_POST["teamId"];
    $update_user="UPDATE `coaches` SET `coachName`='$coachName',`teamId`='$teamId' WHERE coachId='$coachId'";


	//$update_status = "UPDATE users SET  AccessTime = now() WHERE userId = '$userId' LIMIT 1";
	
	if($conn->query($update_user) === TRUE){
		header("Location: coach.php");
		exit();
	}else{
		echo "Error: " . $update_user . " ON " . $conn->error;
	}
}
?>
