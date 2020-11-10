<!DOCTYPE html>
<html>
<head>
    <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="public/scores-game-admin.js"></script>
  
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

<div class="container">
    <div class="row">
        <div class="col-md-6">
            
<?php
require_once './Fixture.php';
include_once 'connection.php';
//Example with a pair number of teams
?>

<?php
echo  "<h1 > First Leg</h1>";

$teams = array("Blades", "KCB Bank", "Cooperative Bank", "Strathmore", "Ulinzi", "Prisons", "All Stars", "KPA", "KCA Univercity", "Kivuli");
$fixPair = new Fixture($teams);
$schedule = $fixPair->getSchedule();
//show the rounds
$i = 1;
foreach($schedule as $rounds){
    echo "<h3>Week {$i}</h3>";
    foreach($rounds as $game){
        echo "{$game[0]} vs {$game[1]}<br>";

    }
    echo "<br>";
    $i++;
}

echo "<h1> Second Leg</h1>";
echo "<hr>";


//Example with a odd number of teams
//$otherTeams = array("Portugal", "Argentina", "South Korea", "Australia", "Egypt");
$otherTeams = array("KCB Bank", "Blades", "Kivuli", "KCA Univercity", "KPA", "All Stars", "Prisons", "Ulinzi", "Strathmore", "Cooperative Bank");
$fixOdd = new Fixture($otherTeams);
$games = $fixOdd->getSchedule();
$i = 1;
foreach($games as $rounds){
    $free = "";
    echo "<h3>Week {$i}</h3>";
    foreach($rounds as $match){
        if($match[0] == "free this round"){
            $free = "<span style='color:red;'>{$match[1]} is {$match[0]}</span><br>";
        }elseif($match[1] == "free this round"){
            $free = "<span style='color:red;'>{$match[0]} is {$match[1]}</span><br>";
        }else{
            echo "{$match[0]} vs {$match[1]}<br>";
        }
    }
    echo $free;
    echo "<br>";
    $i++;
}       
?>

            
        </div>
        <div class="col-md-6">
            <div id="container"></div>

        </div>
    </div>
</div>


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
