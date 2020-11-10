
<?php
session_start();
?>
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



<div class="container">
    <div class="row">
        <div class="col-md-6">
            
<?php
require_once './Fixture.php';
include_once 'connection.php';
//Example with a pair number of teams
?>

<?php
echo "<h1> First Leg</h1>";

$teams = array("Blades", "KCB Bank", "Cooperative Bank", "Strathmore", "Ulinzi", "Prizons", "All Stars", "KPA", "KCA Univercity", "Kivuli");
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
$otherTeams = array("KCB Bank", "Blades", "Kivuli", "KCA Univercity", "KPA", "All Stars", "Prizons", "Ulinzi", "Strathmore", "Cooperative Bank");
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



</body>
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