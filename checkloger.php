<?php
if(!isset($_SESSION["authlog"])){
	header("Location: message.php");
	exit();
}
?>