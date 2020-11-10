<?php
session_start();
require_once "checkloger.php";
require_once "connection.php";



if (isset($_GET["playerId"])){
  $playerId = $_GET["playerId"];
  $select_qry ="SELECT `playerId`, `playerName`, `teamId`, `height`, `weight`, `age` FROM `players` WHERE playerId='$playerId' limit 1";
  $result_item_id = $conn->query($select_qry);
  $row = $result_item_id->fetch_assoc();
?>
<head>
  <meta charset = "utf-8" name="viewport" content="width=device-width, initial-scale=1">
  <title>.:View Profile:.</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css.css">

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
            <li> <a href="standingsadmin.php">Standings</a></li>
            <li> <a href="playersadmin.php">Players</a></li>
                    <li> <a href="teamsadmin.php">Teams</a></li>
                    <li style="float:right;"><a href="profile.php?userId=<?=$_SESSION["authlog"]["userId"]?>"><img style="width:30px; height:25px; background-color:white;" src="images/people/<?php echo $_SESSION["authlog"]["Image"];?>"><?php echo ' ';?><?php echo strtoupper($_SESSION["authlog"]["Full_Name"]);?></a></li>

          </ul>
        </div>
      </div>
   </nav>

</head>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <img style="background-color:white; width:250; height:200; align:center;" src="images/people/<?php echo $_SESSION["authlog"]["Image"];?>">
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
<h1 align="center"><b><?php echo strtoupper($row["playerName"])."'S PROFILE"; ?></b></h1>
<p>
  <?php if (isset($_GET["wrongext"])){?>
      <br /><span style = "color: #dd0000; font-size: 9px;">Wrong File Type</span>
  <?php } ?>
</p>


<table align="center" >
  <form action = "update4.php" method = "POST">
  	<th align="center">COACH ID:</th>
      <td>
        <input type="int" name="playerId" value="<?php echo ucfirst($row["playerId"]); ?>">
      </td>
    </tr>
    <tr>
    <tr>
      <th align="center">PLAYER NAME:</th>
      <td>
        <input type="text" name="playerName" value="<?php echo ucfirst($row["playerName"]); ?>">
      </td>
    </tr>
        
      <th align="center">TEAM ID:</th>
      <td>
        <input type="int" name="teamId" value="<?php echo ucfirst($row["teamId"]); ?>">
      </td>
    </tr>
    <tr>
      <th align="center">HEIGHT:</th>
      <td>
        <input type="int" name="height" value="<?php echo $row["height"]; ?>">
      </td>
    </tr>
    <tr>
      <th align="center">WEIGHT:</th>
      <td>
        <input type="int" name="weight" value="<?php echo $row["weight"]; ?>">
      </td>
    </tr>
    <tr>
      <th align="center">AGE:</th>
      <td>
        <input type="int" name="age" value="<?php echo $row["age"]; ?>">
      </td>
    </tr>
    <tr>
      <td align="center" colspan="2">
        <label align="center">Select action ...</label><br />
        <input align="center" type="reset" name="reset" value="Clear Fields"/>
        <input align="center" type="submit" name="save_details" value="Submit"/><br/>
      </td>
    </tr>
  </form>
<?php
  }
?>
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
  table{
    align:center;
    width: 700px;
    height: 700px;
    border-radius: 8px;
    background-color: white;
    box-shadow: 0 8px 16px 0
    rgba(0,0,0,0.2), 0 6px 20px 0
    rgba(0,0,0,0.19);
    cursor: pointer;
    padding: 6px 12px;
    border-top: none;
  }

  th, td {
    border-bottom: 1px solid #ddd;
    padding: 10px;
    text-align: left;
  }

  tr:hover {
    background-color: #f5f5f5
  }

  input[type=text]{
    width: 50%;
    border: 2px solid grey;
    border-radius: 4px;
    -webkit-transition: width 1.8s ease-in-out;
    transition: width 1.8s ease-in-out;
  }

  input[type=text]:focus {
    border: 3px solid #555;
    width: 100%;
  }

  input[type=int]{
    width: 50%;
    border: 2px solid grey;
    border-radius: 4px;
    -webkit-transition: width 1.8s ease-in-out;
    transition: width 1.8s ease-in-out;
  }

  input[type=int]:focus {
    border: 3px solid #555;
    width: 100%;
  }

  select{
    width: 50%;
    border: 2px solid grey;
    border-radius: 4px;
    -webkit-transition: width 1.8s ease-in-out;
    transition: width 1.8s ease-in-out;
  }

  select:focus {
    border: 3px solid #555;
    width: 100%;
  }

  input[type=email]{
    width: 50%;
    border: 2px solid grey;
    border-radius: 4px;
    -webkit-transition: width 1.8s ease-in-out;
    transition: width 1.8s ease-in-out;
  }

  input[type=email]:focus {
    border: 3px solid #555;
    width: 100%;
  }

  input[type=password] {
    width: 50%;
    border: 2px solid grey;
    border-radius: 4px;
    -webkit-transition: width 0.8s ease-in-out;
    transition: width 0.8s ease-in-out;
  }

  input[type=password]:focus {
    border: 3px solid #555;
    width: 100%;
  }

  input[type=button], input[type=submit], input[type=reset], input[type=file] {
    background-color: grey;
    box-shadow: 0 8px 16px 0
    rgba(0,0,0,0.2), 0 6px 20px 0
    rgba(0,0,0,0.19);
    border: none;
    border-radius: 4px;
    color: white;
    padding: 10px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
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