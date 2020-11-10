<?php
session_start();
require_once "connection.php";
?>
<?php
if(isset($_POST["overview_details"])){

	$Full_Name = addslashes($_POST["Full_Name"]);
	$email = addslashes($_POST["email"]);
	$User_Name = addslashes($_POST["User_Name"]);
	$Password = addslashes($_POST["Password"]);
	$phone_Number = addslashes($_POST["phone_Number"]);
	$UserType = addslashes($_POST["UserType"]);
	$Address = addslashes($_POST["Address"]);

	$_SESSION["Full_Name"] = ucfirst($Full_Name);
	$_SESSION["email"] = strtolower($email);
	$_SESSION["User_Name"] = $User_Name;
	$_SESSION["Password"] = md5($Password);
	$_SESSION["phone_Number"] = $phone_Number;
	$_SESSION["Address"] = ucfirst($Address);

	if ($UserType == 2){
		$_SESSION["UserType"] = "Secretary";
	}else if ($UserType == 2){
		$_SESSION["UserType"] = "Secretary";
	}

	$file_array = explode(".", $_FILES["Image"]["name"]);
	$file_ext = end($file_array);
		
	$filename = 'user_'.$_SESSION["Full_Name"].'.'.$file_ext;
	$filesize = $_FILES["Image"]["size"];
	$filetype = $_FILES["Image"]["type"];
	$actfile = $_FILES["Image"]["tmp_name"];
		
	$_SESSION["filename"] = $filename;
	$_SESSION["filesize"] = $filesize;
	$_SESSION["filetype"] = $filetype;
	$_SESSION["actfile"] = $actfile;
		
	$allowedExt = array("image/png","image/jpg","image/jpeg","image/gif","image/GIF","image/JPEG","image/JPG","image/PNG","image/PPT");
		
	// if(!in_array($filetype, $allowedExt)){
	// 	header("Location: form.php#2?wrongext");
	// 	exit();
	// }
		
	$path="images/people/";
	$target = $path . $_SESSION["filename"];
		
	move_uploaded_file($_SESSION["actfile"], $target);
	
	header("Location: overview1.php");
	exit();

}

if(isset($_POST["save_details"])){

	$Full_Name = $_SESSION["Full_Name"];
	$email = $_SESSION["email"]; 
	$User_Name = $_SESSION["User_Name"];
	$hash_Password = $_SESSION["Password"];
	$phone_Number = $_SESSION["phone_Number"];
	$Address = $_SESSION["Address"];
	$filename = $_SESSION["filename"];


	if ( $_SESSION["UserType"] == "Manager"){
		$UserType = 1;
	}else if ($_SESSION["UserType"] == "Secretary"){
		$UserType = 2;
	}

	$add_user = "INSERT INTO users (Full_Name, email, phone_Number, User_Name, Password, UserType, Image, Address) VALUES ('$Full_Name', '$email', '$phone_Number', '$User_Name', '$hash_Password', '$UserType','$filename', '$Address')";

	if($conn->query($add_user) === TRUE){
		
		unset($_SESSION["Full_Name"]);
		unset($_SESSION["email"]); 
		unset($_SESSION["User_Name"]);
		unset($_SESSION["Password"]);
		unset($_SESSION["phone_Number"]);
		unset($_SESSION["UserType"]);
		unset($_SESSION["Address"]);
		unset($_SESSION["filename"]);
			
		header("Location: users.php");
		exit();
	}else{
		echo "Error: " . $add_user . " ON " . $conn->error;
	}
}
?>