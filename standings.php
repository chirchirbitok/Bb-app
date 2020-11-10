<?php
  session_start();
    require_once "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
  <title>Standings</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css.css">
<style>
* {
  box-sizing: border-box;
}
 .navbar{
    margin-bottom: 0;
    border-radius: 0;
    background-color: #030303;
    color: #FFF
    padding: 1% 0;
    font-size: 1.2em;
    border:0;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>
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
            <li><a href="home.php">Home</a> </li>
            <li><a href="home777.php">News</a> </li>
            <li><a href="example.php">Schedule</a> </li>
            <li> <a href="standings.php">Standings</a></li>
            <li> <a href="players.php">Players</a></li>
            <!-- <li> <a href="Shoppingcart/index.php">Shop</a></li> -->
            <li> <a href="teams.php">Teams</a></li>
             <li> <a href="form.php">My Account</a></li>

          </ul>
        </div>
      </div>
   </nav>


<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      
      <h3 align="center">NEWS</h3><hr class="style-one">
        <!-- update of an existing tutorial  -->


  <div class="welcome">
    <p><small><em></em><small/></p>
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
       <span>published on <?= date("M, jS  Y, H:i", $article->news_published_on) ?> by <?= stripslashes($article->news_author) ?></span>
      <h4><small><a href="read-news777.php?newsid=<?= $article->news_id ?>"><?= stripslashes($article->news_title) ?></a><small/></h4>
      <!-- <p><?= stripslashes($article->news_short_description) ?></p> -->
      
      <hr>

    <?php endforeach ?>

     <?php endif?>
    </div>


  </div>

  
  
      
    </div>

    <div class="col-sm-9">
    
      
<h2 align="center">LEAGUE STANDINGS</h2>


<table id="myTable">
  <tr class="header">
    <!-- <th style="width:20%;">Standing Id</th> -->
    <th style="width:20%;">Team Name</th>
    <th style="width:20%;">Wins</th>
    <th style="width:20%;">Loss</th>
    <th style="width:20%;">Played</th>
    <th style="width:20%;">Points</th>
    </tr>
  <?php 

$select_qry="SELECT teamName, win, loss, played, points FROM `standings` INNER JOIN `teams` ON `standings`.`teamId`=`teams`.`teamId` ORDER BY `points` DESC";
$results=$conn->query($select_qry);


if ($results->num_rows>0){
  while ($row=$results->fetch_assoc()) {
 ?>
  <tr>
  <!-- <td align="center" scope="row"><?php echo $row["standingId"]; ?></td> -->
  <td align="center" scope="row"><?php echo $row["teamName"]; ?></td>
  <td align="center" scope="row"><?php echo $row["win"]; ?></td>
  <td align="center" scope="row"><?php echo $row["loss"]; ?></td>
  <td align="center" scope="row"><?php echo $row["played"]; ?></td>
  <td align="center" scope="row"><?php echo $row["points"]; ?></td>
 </tr>
 <?php
 }
}else {
  echo "0 results";
 }
    ?>
  
</table>
      
      
        </div>
      </div>
    </div>
  </div>
</div>

<br>


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
            <a href="https://www.youtube.com/channel/UCCvQoPZ-ogSkvPEvMKM3bPw" class="fa fa-youtube"></a>
        </div>
        <div class="col-sm-4">
            <img src="img/nbalogo.png" class="icon">
        </div>
    </div>
</footer>

</body>
</html>
<style type="text/css">
  hr.style-one{
    border: 0;
height: 1px;
background: #333;
background-image: -webkit-linear-gradient(left, #ccc, #333, #ccc);
background-image: -moz-linear-gradient(left, #ccc, #333, #ccc);
background-image: -ms-linear-gradient(left, #ccc, #333, #ccc);
background-image: -o-linear-gradient(left, #ccc, #333, #ccc);
  }
  .fa{
    padding:20px;
    font-size: 30px;
    color: #FFF;

}
footer{
    width: 100%;
    background-color: #030303;  
    padding: 3%;
    color: #FFF;
}
</style>