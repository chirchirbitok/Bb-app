<?php
  session_start();
    require_once "connection.php";
    require_once "checkloger.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>profile</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
                    <li> <a href="profile.php">View profile</a></li>

    			</ul>
    		</div>
    	</div>
   </nav>

   <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <img style="background-color:white; width:100%; height:50%; align:center;" src="images/people/<?php echo $_SESSION["authlog"]["Image"];?>">
    <label style="color:white"><?php echo $_SESSION["authlog"]["Full_Name"];?></label><br />
    <label style="color:white"><?php echo $_SESSION["authlog"]["User_Name"];?></label><br />
    <label style="color:white"><?php echo $_SESSION["authlog"]["email"];?></label><br />
    <label style="color:white"><?php echo $_SESSION["authlog"]["phone_Number"];?></label><br />
    <label style="color:white"><?php echo $_SESSION["authlog"]["Address"];?></label><br />
    <a href="index.php">Index</a>
    <a href="logout.php">Logout</a>
    <a href="#"></a>
</div>
<div id="main">
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
</div>
   <?php 
  

    if (isset($_GET["userId"])) {
    	$userId =$_SESSION["authlog"]["userId"];

    	$select_qry="SELECT `userId`, `Full_Name`, `email`, `phone_Number`, `User_Name`, `Password`, `UserType`, `AccessTime`, `Image`, `Address` FROM `users` ";
    	$result_item_id=$conn->query($select_qry);
    	$row=$result_item_id->fetch_assoc();
        
    	    }
    ?>
    <h1 align="center"><b><?php echo strtoupper($_SESSION["authlog"]["Full_Name"])." 'S PROFILE"?></b></h1>
         <table align="center">
         	<tr>
         		<th align="center" scope="row">FULL NAME:</th>;
         		<td>
         			<?php echo ucfirst($_SESSION["authlog"]["Full_Name"]);?>
         		</td>
         	</tr>

         	<tr>
         		<th align="center" scope="row">Email ADDRESS:</th>
         		<td>
         			<?php echo strtoupper($_SESSION["authlog"]["email"]);?>
         		</td>
         	</tr>
         	<tr>
         		<th align="center" scope="row">PHONE NUMBER:</th>
         		<td>
         			<?php echo ($_SESSION["authlog"]["phone_Number"]);?>
         		</td>
         	</tr>
         	<tr>
         		<th align="center" scope="row">USER TYPE:</th>
         		<td>
         			<?php echo ($_SESSION["authlog"]["UserType"]);?>
         		</td>
         	</tr>
            <tr>
         		<th align="center" scope="row">ADRRESS:</th>
         		<td>
         			<?php echo ($_SESSION["authlog"]["Address"]);?>
         		</td>
         	</tr>
            <tr>
            <th align="center">UPDATE:</th>
            <td>
                <a href="review5.php?userId=<?=$_SESSION["authlog"]["userId"]?>">UPDATE YOUR PROFILE</a>
            </td>
        </tr>
         	
         </table>
</body>
</html>
<style type="text/css">
	.navbar{
	margin-bottom: 0;
	border-radius: 0;
	background-color: #5E4485;
	color: #FFF
	padding: 1% 0;
	font-size: 1.2em;
	border:0;
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
table{
	align:center;
	width: 700px;
	height: 700;
	border-radius: 8px;
	background-color: white;
	box-shadow: 0 8px 16px 0;
	cursor:pointer;
	padding: 6px 12px;
	border-top:none;
}
th, td{
	border-bottom: 1px solid #ddd;
	padding:10px;
	text-align: left;
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
