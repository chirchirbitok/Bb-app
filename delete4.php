<?php
session_start();
require_once "connection.php";

	$playerId = $_GET['playerId'];
	
	$del_query = "delete from players where playerId ='$playerId'";

	mysqli_query($conn, $del_query);

	header("location: players2.php");
?>