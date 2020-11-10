<?php
/*
Author: Javed Ur Rehman
Website: https://www.allphptricks.com
*/
session_start();
include('../connection.php');
$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$result = mysqli_query($conn,"SELECT * FROM `products` WHERE `code`='$code'");
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$code = $row['code'];
$price = $row['price'];
$image = $row['image'];

$cartArray = array(
	$code=>array(
	'name'=>$name,
	'code'=>$code,
	'price'=>$price,
	'quantity'=>1,
	'image'=>$image)
);

if(empty($_SESSION["shopping_cart"])) {
	$_SESSION["shopping_cart"] = $cartArray;
	$status = "<div class='box'>Product is added to your cart!</div>";
}else{
	$array_keys = array_keys($_SESSION["shopping_cart"]);
	if(in_array($code,$array_keys)) {
		$status = "<div class='box' style='color:red;'>
		Product is already added to your cart!</div>";	
	} else {
	$_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
	$status = "<div class='box'>Product is added to your cart!</div>";
	}

	}
}
?>
<html>
<head>
<title>Demo Simple Shopping Cart using PHP and MySQL - AllPHPTricks.com</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
<style type="text/css">
	.navbar{
	margin-bottom: 0;
	border-radius: 0;
	background-color: #030303;
	color: #FFF
	padding: 1% 0;
	font-size: 1.2em;
	border:0;
}
footer{
	width: 100%;
	background-color: #030303;	
	padding: 3%;
	color: #FFF;
}
.fa{
	padding:20px;
	font-size: 30px;
	color: #FFF;

}
.navbar-brend{
	
	}
.navbar-brand{
	float:left;
	min-height: 20px;
	padding: 0 15px 5px;
}
.navbar-inverse .navbar-nav .active a. .navbar-inverse .navbar-nav .active a:focus, .navbar-inverse .navbar-nav .active a.:hovwe{
	color:#FFF;
	background-color: #5E4485;
}
.navbar-inverse .navbar-nav li a{
	color: #D5D5D5;
}
.item{
	
	}
.fa{
	padding: 15px
	font-size:25px;
	color: #FFF;
}

</style>
</head>
<body>
<nav class="navbar navbar-inverse">
    	<div class="container-fluid">
    		<div class="navbar-header">
    			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#MyNavbar">
    				<span class="icon-bar"></span>
    				<span class="icon-bar"></span>
    				<span class="icon-bar"></span>
    			</button>
    			<a href="#" class="navbar-nav navbar navbar-right"><img src="../img/w3newbie.png"></a>
    		</div>
    		<div class="collapse navbar-collapse" id="myNavbar">
    			<ul class="nav navbar-nav navbar-right">
    				<li><a href="../home.php">Home</a> </li>
    				<li><a href="../home777.php">News</a> </li>
    				<li><a href="../example.php">Schedule</a> </li>
    				<li> <a href="../standings.php">Standings</a></li>
    				<li> <a href="../players.php">Players</a></li>
    				<li> <a href="index.php">Shop</a></li>
                    <li> <a href="../teams.php">Teams</a></li>
                    <li> <a href="../form.php">My Account</a></li>

    			</ul>
    		</div>
    	</div>
   </nav>





<div style="width:700px; margin:50 auto;">

<h2>Demo Simple Shopping Cart using PHP and MySQL</h2>   

<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div">
<a href="cart.php"><img src="cart-icon.png" /> Cart<span><?php echo $cart_count; ?></span></a>
</div>
<?php
}

$result = mysqli_query($conn,"SELECT * FROM `products`");
while($row = mysqli_fetch_assoc($result)){
		echo "<div class='product_wrapper'>
			  <form method='post' action=''>
			  <input type='hidden' name='code' value=".$row['code']." />
			  <div class='image'><img src='".$row['image']."' /></div>
			  <div class='name'>".$row['name']."</div>
		   	  <div class='price'>$".$row['price']."</div>
			  <button type='submit' class='buy'>Buy Now</button>
			  </form>
		   	  </div>";
        }
mysqli_close($conn);
?>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>

</div>


</body>

</html>
<footer class="container-fluid text-center">
	<div class="row">
		<div class="col-sm-4">
			<h3>Contact Us</h3>
			<br>
			<h4>Our contact and info here..</h4>
		</div>
		<div class="col-sm-4">
			<h3>Connect</h3>
			<h4>Our contact and info here..</h4>
			<a href="https://www.facebook.com/groups/124331260980496/" class="fa fa-facebook"></a>
			<a href="#" class="fa fa-google"></a>
			<a href="https://twitter.com/kbf_basketball?lang=en" class="fa fa-twitter"></a>
			<a href="https://www.youtube.com/watch?v=X99UMc1X_i0" class="fa fa-youtube"></a>
		</div>
		<div class="col-sm-4">
			<img src="../img/nbalogo.png" class="icon">
		</div>
	</div>
</footer>