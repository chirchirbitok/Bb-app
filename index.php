<?php
session_start();
require_once "checkloger.php";
require_once "connection.php";
?>
<html lang = "en-US">
	<head>
		<title>.:Manager:.</title>
		<link rel="stylesheet" type="text/css" href="css.css">
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css.css">
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
    			<a href="#" class="navbar-nav navbar navbar-right"><img src="img/w3newbie.png"></a>
    		</div>
    		<div class="collapse navbar-collapse" id="myNavbar">
    			<ul class="nav navbar-nav navbar-right">
    				<li> <a href="exampleadmin.php">Schedule</a></li>
    				<li> <a href="standingsadmin.php">Standings</a></li>
    				<li> <a href="playersadmin.php">Players</a></li>
                    <li> <a href="teamsadmin.php">Teams</a></li>
                    <li style="float:right;"><a href="profile.php?userId=<?=$_SESSION["authlog"]["userId"]?>"><img style="width:30px; height:25px; background-color:white;" src="images/people/<?php echo $_SESSION["authlog"]["Image"];?>"><?php echo ' ';?><?php echo strtoupper($_SESSION["authlog"]["Full_Name"]);?></a></li>

    			</ul>
    		</div>
    	</div>
   </nav>
		<br />
		<br />
		<br />
		<table align="center" >
			<tr>
				<td>
					<h2><a href="profile.php?userId=<?=$_SESSION["authlog"]["userId"]?>">YOUR PROFILE</a></h2>
				</td>
			</tr>
			<tr>
				<td>
					<h2><a href="users.php">Manage Users</a></h2>
				</td>
			</tr>
			<tr>
				<td>
					<h2><a href="logout.php">Logout</a></h2>
				</td>
			</tr>
		</table>
	</body>

	
</html>
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
	table {
		align:center;
		width: 700px;
		border-radius: 8px;
		background-color: white;
		box-shadow: 0 8px 16px 0
		rgba(0,0,0,0.2), 0 6px 20px 0
		rgba(0,0,0,0.19);
		cursor: pointer;
		padding: 6px 12px;
		text-align: center;
		border-top: none;
	}
	
	a:hover{
		font-size:0.8em;
	}
	
	th, td {
		border-bottom: 1px solid #ddd;
	}
	
	tr:hover {
		background-color: powderblue;
	}
</style>