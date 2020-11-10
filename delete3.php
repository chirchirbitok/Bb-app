<?php
session_start();
require_once "connection.php";

	$coachId = $_GET['coachId'];
	
	$del_query = "delete from coaches where coachId ='$coachId'";

	mysqli_query($conn, $del_query);

	header("location: coach.php");
?>