<?php
session_start();
?>
<?php 
//include_once "functions.php";
require __DIR__.'../functions.php' ?>
<!DOCTYPE html>
<html>

<head>
	<title>Welcome to news channel</title>

    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
    			<a href="#" class="navbar-nav navbar navbar-right"><img src="img/w3newbie.png"></a>
    		</div>
    		<div class="collapse navbar-collapse" id="myNavbar">
    			<ul class="nav navbar-nav navbar-right">
            
    				<!-- <li><a href="home.php">Home</a> </li> -->
    				<li> <a href="homesec.php">News</a></li>
    				<li> <a href="standingsec.php">Standings</a></li>
    				<li> <a href="playersec.php">Players</a></li>
                    <li> <a href="teamsec.php">Teams</a></li>
                    <li style="float:right;"><a href="profile2.php?userId=<?=$_SESSION["authlog"]["userId"]?>"><img style="width:30px; height:25px; background-color:white;" src="images/people/<?php echo $_SESSION["authlog"]["Image"];?>"><?php echo ' ';?><?php echo strtoupper($_SESSION["authlog"]["Full_Name"]);?></a></li>

          		</ul>
    		</div>
    	</div>
   </nav>




	<!-- Display and access to the database -->
	<div class="container">
		
		<div class="welcome">
			<h1>Latest news</h1>
			<p><em>We never stop until you are aware.</em></p>
			<a href="homesec.php">return to news page</a>
		</div>

		<div class="news-box">

			<div class="news">
			
			<?php
				//Database handle
				$dbh = connect_to_db();   //already created the function in dbconnect

				$id_article = (int)$_GET['newsid'];

				if (!empty($id_article) && $id_article > 0) {
					# Fetch news
					$article = getAnArticle( $id_article, $dbh);
					$article = $article[0];
				}else{
					$article = false;
					echo "<strong>Wrong article!</strong>";
				}

				$other_articles = getOtherArticles( $id_article, $dbh);

			?>

			<?php if ($article && !empty($article)) :?>

			<h2><?= stripslashes($article->news_title) ?></h2>
			<span>published on <?= date("M, js Y, H:i",$article->news_published_on) ?> by <?= stripslashes($article->news_author) ?></span>
			<div>
				<?= stripslashes($article->news_full_content) ?>
			</div>
				<?php else:?>

				<?php endif?>
			</div>

		<hr>

		<h1>Other articles</h1>

		<div class="similar-posts">
			<?php if ( $other_articles && !empty($other_articles)) :?>

			<?php foreach ($other_articles as $key => $article) :?>

			<h2><a href="homesec.php?newsid=<?=$article->news_id ?>"><?= stripslashes($article->news_title) ?></a></h2>
			<p><?=stripslashes($article->news_short_description) ?></p>
			<span>published on <?= date("M, jS  Y, H:i", $article->news_published_on) ?> by <?= stripslashes($article->news_author) ?></span>

		<?php endforeach?>

	    <?php endif?>
		</div>

		</div>

	</div>



</body>
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
			<img src="img/nbalogo.png" class="icon">
		</div>
	</div>
</footer>
<style type="text/css">
	display: block;
	.img-responsive{
    max-width: 100%;
    width: 100%;
    height: auto;
}
.col2 a img {
    width: 33.33333333%;
    float: left;

}
	h2{
		font-weight: 500;
		color: inherit;
	}
	.news{
		    box-sizing: border-box;
		position: relative;
	}
	.col1{
		padding: 10px;
		margin-bottom: 30px;
		    box-sizing: border-box;
	}
	.col1 h2 {
    font-family: 'Conv_Oswald-Regular',Sans-Serif;
    margin: 0px 0px 10px 0px;
    font-weight: bold;
    color: #666;
    font-size: 16px;
    text-transform: uppercase;
}
#icon{
	max-width: 200px;
	margin: 1% auto;
}
.container{
	margin: 4% auto;
}
img{
	width: 100%
	height:100%;
}

.news-box{
  width: 800px;
  margin: 0.5em auto;
  padding: 30px;

  background-color: #ffffff;
}
.news-box h2{
  font-size: 1.3em;
  padding: 0;
  margin-bottom: 0;

  color: #000;
}
.news-box p{
  font-size: 12px;
  padding: 0;
  margin-bottom: 0.3em;

  color: #555;
}
.news-box span{
  font-size: 10px;
  color: #aaa;
}
.welcome{
  width: 800px;
  margin: 2em auto;
  padding: 10px 30px;
  background-color: #ffffff;
}
.welcome a {
  display: inline-block;
  width: 200px;
  border: 2px solid #000;
  padding: 0.5px;
  text-align: center;
}
.welcome h1{
  margin: 0;
  color: #000000;
}
</style>
</html>