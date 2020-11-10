<?php
include "constant.php";

//Creating connection

$conn = new mysqli(HOSTNAME, HOSTUSER, HOSTPASSWORD, DBNAME);

//Check connection
	if($conn->connect_error){
		die("Connection to database failed: ".$conn->connect_error);
	}else{
		//echo "Connected successfully to " .DBNAME. " database";
	}
?>
