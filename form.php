<!DOCTYPE html>
<?php
require_once "connection.php";

if (isset($_POST["submit_details"])){
	$Username = addslashes($_POST["Username"]);
	$Password = addslashes($_POST["Password"]);
} 
?>
<html lang = "en-US">
	<body>
	<head>
		<title>.:Registration Form:.</title>
		<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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

  </style>
	</head>
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
    				<li><a href="home.php">Home</a> </li>
    				<li><a href="home777.php">News</a> </li>
    				<li><a href="example.php">Schedule</a> </li>
    				<li> <a href="standings.php">Standings</a></li>
    				<li> <a href="players.php">Players</a></li>
    				<li> <a href="Shoppingcart/index.php">Shop</a></li>
                    <li> <a href="teams.php">Teams</a></li>
                    <li> <a href="form.php">My Account</a></li>

    			</ul>
    		</div>
    	</div>
   </nav>
   <br><br>
	<table align="center">
		<tr>
			<td align="center">
				<ul class="tab">
					<li><a href="#1" class="tablinks" onclick="openLink(event, 'login')" id="defaultOpen">Login</a></li>
					<li><a href="#2" class="tablinks" onclick="openLink(event, 'register')" >Register</a></li>
				</ul>
				<div id="login" class="tabcontent">
					<h3> Login </h3>
					<p>
					</p>
					<p></p>
					<p>
						<form method="POST" action="checklogin.php" enctype = "multipart/form-data" id="login">
							<table align="center">
								<tr>
									<td>
										<?php if (isset($_GET["terminated"])){?>
											<span style = "color: #dd0000; font-size: 9px;">Session Terminated</span>
										<?php } ?>
									</td>
									<td>
										<?php if (isset($_GET["incorrect"])){?>
											<span style = "color: #dd0000; font-size: 9px;">Incorrect Username or Password</span>
										<?php } ?>
									</td>
								</tr>
								<tr>
									<td>
										<h4><b> Username: <b></h4>
										<input type="text" name = "User_Name" placeholder="Username" size="50px" required = "" >
									</td>
								</tr>
								<tr>
									<td>
										<h4><b> Password: <b></h4>
										<input type="password" name = "Password" placeholder="Password" size="50px" required = "" >
									</td>
								</tr>
							</table>
							<table align="center">
							<tr>
							<td align="center">
							<label>Select operation</label><br />
							<input type="reset" name="reset" value="Clear Fields"/>
							<input type="submit" name="checklogin" value="Login"/><br/>
							</td>
							</tr>
							</table>
						</form>
					</p>
				</div>
				<div id="register" class="tabcontent">
					<h3> Register </h3>
					
					<p>
						<?php if (isset($_GET["wrongext"])){?>
							<br /><span style = "color: #dd0000; font-size: 9px;">Wrong File Type</span>
						<?php } ?>
					</p>
					<p>
						<form id="register" method="POST" action="process_user.php" enctype = "multipart/form-data">
						<table align="center">
							<tr>
								<td>
									<h4><b> Full Name: <b></h4>
									<input type="text" name = "Full_Name" value = "<?php if(isset($_SESSION['Full_Name'])){ echo stripslashes($_SESSION['Full_Name']); unset($_SESSION['Full_Name']); } ?>" placeholder="Enter your Name" size="50px" >
								</td>
							</tr>
							<tr>
								<td>
									<h4><b> Email: <b></h4>
									<input type="email" name = "email" value = "<?php if(isset($_SESSION['email'])){ echo stripslashes($_SESSION['email']); unset($_SESSION['email']); } ?>" placeholder=" Email" size="50px" required = "" >
								</td>
							</tr>
							<tr>
								<td>
									<h4><b> Username: <b></h4>
									<input type="text" name = "User_Name" value = "<?php if(isset($_SESSION['User_Name'])){ echo stripslashes($_SESSION['User_Name']); unset($_SESSION['User_Name']); } ?>" placeholder="Enter a unique username" size="40px" required = "" >
								</td>
							</tr>
							<tr>
								<td>
									<h4><b> Password: <b></h4>
									<input type="password" name = "Password" value = "<?php if(isset($_SESSION['Password'])){ echo stripslashes($_SESSION['Password']); unset($_SESSION['Password']); } ?>" placeholder="Password" size="40px" required = "" >
								</td>
							</tr>
							<tr>
								<td>
									<h4><b> User Type: <b></h4>
									<select name = "UserType" value = "<?php if(isset($_SESSION['UserType'])){ echo stripslashes($_SESSION['UserType']); unset($_SESSION['UserType']); } ?>" required="">
										<option value = "">Choose User Type</option>
										<option value = "1">League Manager</option>
										<option value = "2">League Secretary</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>
									<h4><b> Phone Number: <b></h4>
									<input type="int" name = "phone_Number" value = "<?php if(isset($_SESSION['phone_Number'])){ echo stripslashes($_SESSION['phone_Number']); unset($_SESSION['phone_Number']); } ?>" placeholder="Enter your Contact" size="50px" required = "" >
								</td>
							</tr>
							<tr>
								<td>
									<h4><b> Upload Image: <b></h4>
									<input type="file" name = "Image" value="<?php if(isset($_SESSION['filename'])){ echo stripslashes($_SESSION['filename']); unset($_SESSION['filename']); } ?>">
								</td>
							</tr>
							<tr>
								<td>
									<h4><b> Address: <b></h4>
									<input type="text" name = "Address" value = "<?php if(isset($_SESSION['Address'])){ echo stripslashes($_SESSION['Address']); unset($_SESSION['Address']); } ?>" placeholder="Enter your Address" required = "" >
								</td>
							</tr>
						</table>
						<table align="center">
							<tr>
								<td align="center">
									<label>Select action </label><br />
									<input type="reset" name="reset" value="Clear Fields"/>
									<input type="submit" name="overview_details" value="Overview"/><br/>
								</td>
							</tr>
						</table>
						</form>
					</p>
				</div>
			</td>
		</tr>
	</table>
	<br><br>

<!--Footer-->
  <footer class="page-footer text-center text-md-left pt-4">



    <!--Copyright-->
    <div class="footer-copyright py-3 text-center">
      <div class="container-fluid">
        © 2019 Copyright:  Douglas Bitok

      </div>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

</footer>
<!-- Footer -->
		</body>
</html>
<style>
.double-nav .breadcrumb-dn {
  color: #fff;
}
	body {
		font-family: "Lato", sans-serif;
	}

	ul.tab {
		list-style-type: none;
		margin: 0;
		padding: 0;
		overflow: hidden;
		border: 1px solid #ccc;
		background-color: #f1f1f1;
	}

	/* Float the list items side by side */
	ul.tab li {
		float: left;
		width: 350px;
	}

	/* Style links inside the list items */
	ul.tab li a {
		display: inline-block;
		color: black;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
		transition: 0.8s;
		font-size: 17px;
		
	}

	/* Change background color of links on hover */
	ul.tab li a:hover {
		background-color: #ddd;
		width: 350px;
	}

	/* Create an active tablink class */
	ul.tab li a:focus, .active {
		background-color: #ccc;
		width: 350px;
	}

	/* The tab content */
	.tabcontent {
		display: none;
		padding: 6px 12px;
		text-align: left;
		border: 1px solid #ccc;
		border-top: none;
		width: 700px;
	}
	
	.tabcontent {
		-webkit-animation: fadeEffect 1s;
		animation: fadeEffect 1s; /* Fading effect takes 1 second */
	}

	@-webkit-keyframes fadeEffect {
		from {opacity: 0;}
		to {opacity: 1;}
	}

	@keyframes fadeEffect {
		from {opacity: 0;}
		to {opacity: 1;}
	}
	
	input[type=text]{
		width: 50%;
		border: 2px solid grey;
		border-radius: 4px;
		
	}
	
	input[type=text]:focus {
		border: 3px solid #555;
		width: 100%;
	}
	
	input[type=int]{
		width: 50%;
		border: 2px solid grey;
		border-radius: 4px;
		
	}
	
	input[type=int]:focus {
		border: 3px solid #555;
		width: 100%;
	}
	
	select{
		width: 50%;
		border: 2px solid grey;
		border-radius: 4px;
		
	}
	
	select:focus {
		border: 3px solid #555;
		width: 100%;
	}
	
	input[type=email]{
		width: 50%;
		border: 2px solid grey;
		border-radius: 4px;
		
	}
	
	input[type=email]:focus {
		border: 3px solid #555;
		width: 100%;
	}
	
	input[type=password] {
		width: 50%;
		border: 2px solid grey;
		border-radius: 4px;
		
	}
	
	input[type=password]:focus {
		border: 3px solid #555;
		width: 100%;
	}
	
	input[type=button], input[type=submit], input[type=reset], input[type=file] {
		background-color: grey;
		border: none;
		border-radius: 4px;
		color: white;
		padding: 10px 32px;
		text-decoration: none;
		margin: 4px 2px;
		cursor: pointer;
	}
</style>
<script>
	function openLink(evt, linkName) {
		var i, tabcontent, tablinks;
		tabcontent = document.getElementsByClassName("tabcontent");
			for (i = 0; i < tabcontent.length; i++) {
			tabcontent[i].style.display = "none";
			}
		tablinks = document.getElementsByClassName("tablinks");
			for (i = 0; i < tablinks.length; i++) {
			tablinks[i].className = tablinks[i].className.replace(" active", "");
			}
		document.getElementById(linkName).style.display = "block";
		evt.currentTarget.className += " active";
	}

	document.getElementById("defaultOpen").click();
								
	var myVar = setInterval(myTimer, 1000);

	function myTimer() {
		var d = new Date();
		document.getElementById("demo").innerHTML = d.toLocaleTimeString();
	}
</script>
<?php
require_once "connection.php";

if (isset($_POST["submit_details"])){
	$User_Name = addslashes($_POST["User_Name"]);
	$Password = addslashes($_POST["Password"]);
}
?>