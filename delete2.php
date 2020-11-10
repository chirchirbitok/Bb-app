<?php
session_start();
require_once "connection.php";

	$userId = $_GET['userId'];

	$del_query = "delete from users where userId ='$userId'";

	mysqli_query($conn, $del_query);

	header("location: users2.php");
?>