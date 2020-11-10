<?php
/*
Author: Javed Ur Rehman
Website: https://www.allphptricks.com
*/
session_start();
$status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
	foreach($_SESSION["shopping_cart"] as $key => $value) {
		if($_POST["code"] == $key){
		unset($_SESSION["shopping_cart"][$key]);
		$status = "<div class='box' style='color:red;'>
		Product is removed from your cart!</div>";
		}
		if(empty($_SESSION["shopping_cart"]))
		unset($_SESSION["shopping_cart"]);
			}		
		}
}

if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['code'] === $_POST["code"]){
        $value['quantity'] = $_POST["quantity"];
        break; // Stop the loop after we've found the product
    }
}
  	
}
?>
<html>
<head>
<title>Demo Shopping Cart - AllPHPTricks.com</title>
<title>Demo Simple Shopping Cart using PHP and MySQL - AllPHPTricks.com</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
<link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
</head>
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

<h2>Demo Shopping Cart</h2>   

<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div">
<a href="cart.php">
<img src="cart-icon.png" /> Cart
<span><?php echo $cart_count; ?></span></a>
</div>
<?php
}
?>

<div class="cart">
<?php
if(isset($_SESSION["shopping_cart"])){
    $total_price = 0;
?>	
<table class="table">
<tbody>
<tr>
<td></td>
<td>ITEM NAME</td>
<td>QUANTITY</td>
<td>UNIT PRICE</td>
<td>ITEMS TOTAL</td>
</tr>	
<?php		
foreach ($_SESSION["shopping_cart"] as $product){
?>
<tr>
<td><img src='<?php echo $product["image"]; ?>' width="50" height="40" /></td>
<td><?php echo $product["name"]; ?><br />
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
<input type='hidden' name='action' value="remove" />
<button type='submit' class='remove'>Remove Item</button>
</form>
</td>
<td>
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
<input type='hidden' name='action' value="change" />
<select name='quantity' class='quantity' onchange="this.form.submit()">
<option <?php if($product["quantity"]==1) echo "selected";?> value="1">1</option>
<option <?php if($product["quantity"]==2) echo "selected";?> value="2">2</option>
<option <?php if($product["quantity"]==3) echo "selected";?> value="3">3</option>
<option <?php if($product["quantity"]==4) echo "selected";?> value="4">4</option>
<option <?php if($product["quantity"]==5) echo "selected";?> value="5">5</option>
</select>
</form>
</td>
<td><?php echo "$".$product["price"]; ?></td>
<td><?php echo "$".$product["price"]*$product["quantity"]; ?></td>
</tr>
<?php
$total_price += ($product["price"]*$product["quantity"]);
}
?>
<tr>
<td colspan="5" align="right">
<strong>TOTAL: <?php echo "$".$total_price; ?></strong>
</td>
</tr>
</tbody>
</table>		
  <?php
}else{
	echo "<h3>Your cart is empty!</h3>";
	}
?>
</div>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>


<br /><br />

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