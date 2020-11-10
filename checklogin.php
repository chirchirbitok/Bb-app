<?php
session_start();
require_once "connection.php";
?>
<?php
if(isset($_POST["checklogin"])){

	$User_Name = addslashes($_POST["User_Name"]);
	$Password = addslashes($_POST["Password"]);
	$hash_password = md5($Password);

	$spot_user = "SELECT * FROM users WHERE User_Name = '$User_Name' AND Password = '$hash_password' LIMIT 1";

	$spot_user_results = $conn->query($spot_user);
	
		if($spot_user_results->num_rows > 0){
			
			$_SESSION["authlog"] = $spot_user_results->fetch_assoc();
			$userId = $_SESSION["authlog"]["userId"];

			$update_status = "UPDATE users SET  AccessTime = now() WHERE userId = '$userId' LIMIT 1";

			if ($conn->query($update_status) === TRUE){
				
				$UserType = $_SESSION["authlog"]["UserType"];
				
				if ($UserType == 1){
					header("Location: index.php");
					exit();
				}elseif($UserType == 2){
					header("Location: index2.php");
					exit();
				
				}
			}
		}else{
			header("Location: form.php?incorrect");
			exit();
		} 
}	
?>