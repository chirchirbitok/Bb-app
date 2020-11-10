<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en-US">
	<body>
		<head>
			<meta charset = "utf-8" name="viewport" content="width=device-width, initial-scale=1">
			<title>Users form</title>
			 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		</head>
<br><br>
		 <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="post" action="process_news.php" >
                    <fieldset>
                        <legend class="text-center header">Details overview</legend>
                        

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-8">
                                <tr>
						<td></td>
						<td>
							<h4><b> Item Name: <b></h4>
						</td>
						<td>
							<?php echo $_SESSION["name"]; ?>
						</td>
					</tr>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-8">
                                <tr>
						<td></td>
						<td>
							<h4><b> News Short Description: <b></h4>
						</td>
						<td>
							<?php echo $_SESSION["news_short_description"]; ?>
						</td>
					</tr>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-8">
                                <tr>
						<td></td>
						<td>
							<h4><b> News Full Content: <b></h4>
						</td>
						<td>
							<?php echo $_SESSION["news_full_content"]; ?>
						</td>
					</tr>
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <tr>
						<td></td>
						<td>
							<h4><b> News Author: <b></h4>
						</td>
						<td>
							<?php echo $_SESSION["name"]; ?>
						</td>
					</tr>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                            	<button type="reset" name="reset" class="btn btn-primary btn-lg">Clear Fields</button>
                                <button type="submit" name="save_details" value="Submit" class="btn btn-primary btn-lg">Submit</button><br/>
                                <label><a href="updateinfonews.php">Edit Details<a/><label/>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>



		<br />
		<br />
		<br />
		<footer>
			<table align="center">
				<tr>
					<td align="center" colspan="3"><label>&copy Copyright 2019</label></td>
				</tr>
			</table>
		</footer>
	</body>
</html>
<style type="text/css">
	.header {
    color: #36A0FF;
    font-size: 27px;
    padding: 10px;
}

.bigicon {
    font-size: 35px;
    color: #36A0FF;
}
</style>