<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en-US">
	<body>
		<head>
			<meta charset = "utf-8" name="viewport" content="width=device-width, initial-scale=1">
			<title>Users form</title>
		</head>
		<form method="POST" action="process_user1.php" enctype = "multipart/form-data" >
			<fieldset>
			<legend><h1>Details overview</h1></legend>
				<table align="center">
					<tr>
						<td></td>
						<td>
							<h4><b> Full Name: <b></h4>
						</td>
						<td>
							<?php echo $_SESSION["Full_Name"]; ?>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<h4><b> Email: <b></h4>
						</td>
						<td>
							<?php echo $_SESSION["email"]; ?>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<h4><b> Username: <b></h4>
						</td>
						<td>
							<?php echo $_SESSION["User_Name"]; ?>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<h4><b> Phone Number: <b></h4>
						</td>
						<td>
							<?php echo $_SESSION["phone_Number"]; ?>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<h4><b> Password: <b></h4>
						</td>
						<td>
							<?php echo $_SESSION["Password"]; ?>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<h4><b> User Type: <b></h4>
						</td>
						<td>
							<?php echo $_SESSION["UserType"]; ?>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<h4><b> File: <b></h4>
						</td>
						<td>
							<?php echo $_SESSION["filename"].'.'.$_SESSION["filetype"].'/'.$_SESSION["filesize"]; ?>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<h4><b> Address: <b></h4>
						</td>
						<td>
							<?php echo $_SESSION["Address"]; ?>
						</td>
					</tr>
					
				</table>
				<table align="center">
				<tr>
					<td align="center">
						<label>Select action ...</label><br />
							<input type="reset" name="reset" value="Clear Fields"/>
							<input type="submit" name="save_details" value="Submit"/><br/>
							<label><a href="review.php">Edit Details<a/><label/><br/>
					</td>
				</tr>
			</table>
			</fieldset>	
		</form>
		<br />
		<br />
		<br />
		<footer>
			<table align="center">
				<tr>
					<td align="center" colspan="3"><label>&copy Copyright 2016</label></td>
				</tr>
			</table>
		</footer>
	</body>
</html>