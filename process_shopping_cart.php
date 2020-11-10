
<?php
session_start();
require_once "connection.php";
?>
<?php
if(isset($_POST["cart"])){

	$name = addslashes($_POST["name"]);
	$price = addslashes($_POST["price"]);
	$code = addslashes($_POST["code"]);
	

	$_SESSION["name"] = $name;
	$_SESSION["price"] = $price;
	$_SESSION["code"] = $code;

	if ($UserType == 1){
		$_SESSION["UserType"] = "Manager";
	}elseif ($UserType == 2){
		$_SESSION["UserType"] = "League Secretary";
	}

	$file_array = explode(".", $_FILES["Image"]["name"]);
	$file_ext = end($file_array);
		
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
		
	$path="images/shoppingcart/";
	$target = $path . $_SESSION["filename"];
		
	move_uploaded_file($_SESSION["actfile"], $target);
	
	
	header("Location: shopping_overview.php");
	exit();

}

if(isset($_POST["save_details"])){

	$name = $_SESSION["name"];
	$code = $_SESSION["code"]; 
	$price = $_SESSION["price"]; 
	$filename = $_SESSION["filename"];

	if ( $_SESSION["UserType"] == "Manager"){
		$UserType = 1;
	}else if ($_SESSION["UserType"] == "League Secretary"){
		$UserType = 2;
	}


	// $add_news = "INSERT INTO info_news (name, price, news_full_content, news_author) VALUES ('$name', '$price', '$news_full_content', '$name')";
	$add_product = "INSERT INTO `products` (`name`, `code`, `price`, `image`) VALUES ('$name', '$code','$price','$filename')";

	if($conn->query($add_product) === TRUE){
		
		unset($_SESSION["name"]);
		unset($_SESSION["code"]); 
		unset($_SESSION["price"]); 
		unset($_SESSION["filename"]);
			

		header("Location: shoppinginsert.php");
		exit();
	}else{
		echo "Error: " . $add_news . " ON " . $conn->error;
	}
}
?>

	

	
