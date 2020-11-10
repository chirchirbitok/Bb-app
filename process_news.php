
<?php
session_start();
require_once "connection.php";
?>
<?php
if(isset($_POST["overview_details"])){

	$title = addslashes($_POST["title"]);
	$news_short_description = addslashes($_POST["news_short_description"]);
	$news_full_content = addslashes($_POST["news_full_content"]);
	$name = addslashes($_POST["name"]);

	$_SESSION["title"] = $title;
	$_SESSION["news_short_description"] = $news_short_description;
	$_SESSION["news_full_content"] = $news_full_content;
	$_SESSION["name"] = ucfirst($name);

	
	header("Location: news_overview.php");
	exit();

}

if(isset($_POST["save_details"])){

	$title = $_SESSION["title"];
	$news_short_description = $_SESSION["news_short_description"]; 
	$news_full_content = $_SESSION["news_full_content"];
	$name = $_SESSION["name"];


	$add_news = "INSERT INTO info_news (news_title, news_short_description, news_full_content, news_author) VALUES ('$title', '$news_short_description', '$news_full_content', '$name')";

	if($conn->query($add_news) === TRUE){
		
		unset($_SESSION["title"]);
		unset($_SESSION["news_short_description"]); 
		unset($_SESSION["news_full_content"]);
		unset($_SESSION["name"]);
			
		header("Location: updateinfonews.php");
		exit();
	}else{
		echo "Error: " . $add_news . " ON " . $conn->error;
	}
}
?>

	

	
