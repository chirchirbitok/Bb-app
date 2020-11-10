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
    			
    		</div>
    		<div class="collapse navbar-collapse" id="myNavbar">
    			<ul class="nav navbar-nav navbar-right">
    				<li><a href="home.php">Home</a> </li>
    				<li> <a href="standings.php">Standings</a></li>
    				<li> <a href="players.php">Players</a></li>
                    <li> <a href="teams.php">Teams</a></li>
                    <li style="float:right;"><a href="profile.php?userId=<?=$_SESSION["authlog"]["userId"]?>"><img style="width:50px; height:50px; background-color:white;" src="images/people/<?php echo $_SESSION["authlog"]["Image"];?>"><?php echo ' ';?>View profile</a></li>

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