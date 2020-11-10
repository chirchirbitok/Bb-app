<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


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
</style>


  
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
            <li><a href="examplesec.php">Schedule</a> </li>
            <li> <a href="standingsec.php">Standings</a></li>
            <li> <a href="playersec.php">Players</a></li>
                    <li> <a href="teamsec.php">Teams</a></li>
                    <li style="float:right;"><a href="profile2.php?userId=<?=$_SESSION["authlog"]["userId"]?>"><img style="width:30px; height:25px; background-color:white;" src="images/people/<?php echo $_SESSION["authlog"]["Image"];?>"><?php echo ' ';?><?php echo strtoupper($_SESSION["authlog"]["Full_Name"]);?></a></li>

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
  <a href="index2.php">Index</a>
  <a href="logout.php">Logout</a>
  <a href="#"></a>
</div>
<div id="main">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
</div>


</head>
<body>

  <!-- update of an existing tutorial  -->
  <div class="container">

  <div class="welcome">
    <h1>Latest news</h1>
    <p><em>We never stop until you are aware.</em></p>
  </div>

  <div class="news-box">

    <div class="news">
      <!-- <h2><a href="read-news.php?newsid=1">First news title here</a></h2>
      <p> This news short description will be displayed at this particular place. This news short description will be displayed at this particular place.</p>
      <span>published on Jan, 12th 2015 by zooboole</span> -->
      <?php 
          //The database handle 
       
       include_once "functions.php";
          $dbh = connect_to_db();

          //Fetch news from the database
          $news = fetchNews($dbh);
      ?>

      <?php if ( $news && !empty($news) ) :?>

      <?php foreach ($news as $key =>$article) :?>
       <!--  <a href=""><img src="images/20160428_183921.jpg"></a> -->
      <h2><a href="read-newssec.php?newsid=<?= $article->news_id ?>"><?= stripslashes($article->news_title) ?></a></h2>
      <p><?= stripslashes($article->news_short_description) ?></p>
      <span>published on <?= date("M, jS  Y, H:i", $article->news_published_on) ?> by <?= stripslashes($article->news_author) ?></span>

    <?php endforeach ?>

     <?php endif?>
    </div>


  </div>

  
  
</footer>
</div>



</body>
<!-- Javascript function for three line sidebar -->
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
</html>
<style type="text/css">
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


