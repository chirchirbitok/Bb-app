<?php
session_start();
require_once "checkloger.php";
require_once "connection.php";
 



if (isset($_GET["userId"])){
	$userId = $_GET["userId"];
	$select_qry = "SELECT `userId`, `Full_Name`, `email`, `phone_Number`, `User_Name`, `Password`, `UserType`, `AccessTime`, `Image`, `Address` FROM `users` WHERE userId='$userId' limit 1";
	$result_item_id = $conn->query($select_qry);
	$row = $result_item_id->fetch_assoc();
?>
<head>
	<nav class="navbar navbar-inverse">
    	<div class="container-fluid">
    		<div class="navbar-header">
    			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#MyNavbar">
    				<span class="icon-bar"></span>
    				<span class="icon-bar"></span>
    				<span class="icon-bar"></span>
    			</button>
    			<a href="#" class="navbar-nav navbar navbar-right"><img src="img/w3newbie.png"></a>
    		</div>
    		<div class="collapse navbar-collapse" id="myNavbar">
    			<ul class="nav navbar-nav navbar-right">
    				<!-- <li><a href="home.php">Home</a> </li> -->
    				<!-- <li><a href="home777.php">News</a> </li> -->
    				<li> <a href="homesec.php">News</a></li>
    				<li><a href="examplesec.php">Schedule</a> </li>
    				<li> <a href="standingsec.php">Standings</a></li>
    				<li> <a href="playersec.php">Players</a></li>
                    <li> <a href="teamsec.php">Teams</a></li>
                    <li style="float:right;"><a href="profile2.php?userId=<?=$_SESSION["authlog"]["userId"]?>"><img style="width:30px; height:25px; background-color:white;" src="images/people/<?php echo $_SESSION["authlog"]["Image"];?>"><?php echo ' ';?><?php echo strtoupper($_SESSION["authlog"]["Full_Name"]);?></a></li>

    			</ul>
    		</div>
    	</div>
   </nav>

	<meta charset = "utf-8" name="viewport" content="width=device-width, initial-scale=1">
	<title>.:View Profile:.</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css.css">
</head>
<div id="mySidenav" class="sidenav">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<img style="background-color:white; width:250; height:200; align:center;" src="images/people/<?php echo $_SESSION["authlog"]["Image"];?>">
	<label style="color:white"><?php echo $_SESSION["authlog"]["Full_Name"];?></label><br />
	<label style="color:white"><?php echo $_SESSION["authlog"]["User_Name"];?></label><br />
	<label style="color:white"><?php echo $_SESSION["authlog"]["email"];?></label><br />
	<label style="color:white"><?php echo $_SESSION["authlog"]["phone_Number"];?></label><br />
	<label style="color:white"><?php echo $_SESSION["authlog"]["Address"];?></label><br />
	<a href="index2.php">Index</a>
	<a href="logout.php">Logout</a>
	<a href="#"></a>
</div>
<div id="main">
	<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
</div>
<h1 align="center"><b><?php echo strtoupper($row["Full_Name"])."'S PROFILE"; ?></b></h1>
<p>
	<?php if (isset($_GET["wrongext"])){?>
			<br /><span style = "color: #dd0000; font-size: 9px;">Wrong File Type</span>
	<?php } ?>
</p>
<table align="center" >
	<form action = "update2.php" method = "POST">
		<tr>
			<th align="center">FULL NAME:</th>
			<td>
				<input type="text" name="Full_Name" value="<?php echo ucfirst($row["Full_Name"]); ?>">
			</td>
		</tr>
		<tr>
			<th align="center">EMAIL ADDRESS:</th>
			<td>
				<input type="email" name="email" value="<?php echo strtolower($row["email"]); ?>">
			</td>
		</tr>
		<tr>
			<th align="center">PHONE NUMBER:</th>
			<td>
				<input type="int" name="phone_Number" value="<?php echo $row["phone_Number"]; ?>">
			</td>
		</tr>
		<tr>
			<th align="center">USERNAME:</th>
			<td>
				<input type="text" name="User_Name" value="<?php echo $row["User_Name"]; ?>">
			</td>
		</tr>
		<tr>
			<th align="center">PASSWORD:</th>
			<td>
				<input type="password" name="Password" placeholder="Type in password for changes to be accepted" required="" autofocus>
			</td>
		</tr>
		<tr>
			<th align="center">USER TYPE:</th>
			<td>
				<select name = "UserType" required="">
					<option value = "<?php echo $row["UserType"]; ?>"><?php echo $row["UserType"]; ?></option>
					<option value = "1">League Manager</option>
					<option value = "2">League Secretary</option>
				</select>
			</td>
		</tr>
		<tr>
			<th align="center">ADDRESS:</th>
			<td>
				<input type="text" name="Address" value="<?php echo $row["Address"]; ?>">
			</td>
		</tr>
		<tr>
			<th align="center">USER ID:</th>
			<td>
				<input type="int" name="userId" value="<?php echo ucfirst($row["userId"]); ?>">
			</td>
		</tr>
		<tr>
			<td align="center" colspan="2">
				<label align="center">Select action ...</label><br />
				<input align="center" type="reset" name="reset" value="Clear Fields"/>
				<input align="center" type="submit" name="save_details" value="Submit"/><br/>
			</td>
		</tr>
	</form>
<?php
	}
?>
<style>
	.navbar{
	margin-bottom: 0;
	border-radius: 0;
	background-color: #030303;
	color: #FFF
	padding: 1% 0;
	font-size: 1.2em;
	border:0;
}
	table{
		align:center;
		width: 700px;
		height: 700px;
		border-radius: 8px;
		background-color: white;
		box-shadow: 0 8px 16px 0
		rgba(0,0,0,0.2), 0 6px 20px 0
		rgba(0,0,0,0.19);
		cursor: pointer;
		padding: 6px 12px;
		border-top: none;
	}

	th, td {
		border-bottom: 1px solid #ddd;
		padding: 10px;
		text-align: left;
	}

	tr:hover {
		background-color: #f5f5f5
	}

	input[type=text]{
		width: 50%;
		border: 2px solid grey;
		border-radius: 4px;
		-webkit-transition: width 1.8s ease-in-out;
		transition: width 1.8s ease-in-out;
	}

	input[type=text]:focus {
		border: 3px solid #555;
		width: 100%;
	}

	input[type=int]{
		width: 50%;
		border: 2px solid grey;
		border-radius: 4px;
		-webkit-transition: width 1.8s ease-in-out;
		transition: width 1.8s ease-in-out;
	}

	input[type=int]:focus {
		border: 3px solid #555;
		width: 100%;
	}

	select{
		width: 50%;
		border: 2px solid grey;
		border-radius: 4px;
		-webkit-transition: width 1.8s ease-in-out;
		transition: width 1.8s ease-in-out;
	}

	select:focus {
		border: 3px solid #555;
		width: 100%;
	}

	input[type=email]{
		width: 50%;
		border: 2px solid grey;
		border-radius: 4px;
		-webkit-transition: width 1.8s ease-in-out;
		transition: width 1.8s ease-in-out;
	}

	input[type=email]:focus {
		border: 3px solid #555;
		width: 100%;
	}

	input[type=password] {
		width: 50%;
		border: 2px solid grey;
		border-radius: 4px;
		-webkit-transition: width 0.8s ease-in-out;
		transition: width 0.8s ease-in-out;
	}

	input[type=password]:focus {
		border: 3px solid #555;
		width: 100%;
	}

	input[type=button], input[type=submit], input[type=reset], input[type=file] {
		background-color: grey;
		box-shadow: 0 8px 16px 0
		rgba(0,0,0,0.2), 0 6px 20px 0
		rgba(0,0,0,0.19);
		border: none;
		border-radius: 4px;
		color: white;
		padding: 10px 32px;
		text-decoration: none;
		margin: 4px 2px;
		cursor: pointer;
	}

	body {
		font-family: "Lato", sans-serif;
		transition: background-color .5s;
	}

	.sidenav {
		height: 100%;
		width: 0;
		position: fixed;
		z-index: 1;
		top: 0;
		left: 0;
		background-color: #111;
		overflow-x: hidden;
		transition: 0.5s;
		padding-top: 60px;
	}

	.sidenav a {
		padding: 8px 8px 8px 32px;
		text-decoration: none;
		font-size: 25px;
		color: #818181;
		display: block;
		transition: 0.3s
	}

	.sidenav a:hover, .offcanvas a:focus{
		color: #f1f1f1;
	}

	.sidenav .closebtn {
		position: absolute;
		top: 0;
		right: 25px;
		font-size: 36px;
		margin-left: 50px;
	}

	#main {
		transition: margin-left .5s;
		padding: 16px;
	}

	@media screen and (max-height: 450px) {
	  .sidenav {padding-top: 15px;}
	  .sidenav a {font-size: 18px;}
	}
</style>
<script>
	function openNav() {
		document.getElementById("mySidenav").style.width = "250px";
		document.getElementById("main").style.marginLeft = "250px";
		document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
	}

	function closeNav() {
		document.getElementById("mySidenav").style.width = "0";
		document.getElementById("main").style.marginLeft= "0";
		document.body.style.backgroundColor = "white";
	}
</script>