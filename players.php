<?php
require_once "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
  <title>Players</title>
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

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
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

<h2>LEAGUE PLAYERS</h2>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

<table id="myTable">
  <tr class="header">
    <tr>
      <td align="center"><b>Blades Players</b></td>
  </tr>
    <!-- <th style="width:20%;">Playerid</th> -->
    <th style="width:20%;">Player Name</th>
    <th style="width:20%;">Teamid</th>
    <th style="width:20%;">Height</th>
    <th style="width:20%;">Weight</th>
    <th style="width:20%;">Age</th>

  </tr>
  <?php 
$select_qry="SELECT `playerId`, `playerName`, `teamId`, `height`, `weight`, `age` FROM `players` WHERE teamId =501";

$results=$conn->query($select_qry);

if ($results->num_rows>0){
  while ($row=$results->fetch_assoc()) {
 ?>
  <tr>
  <!-- <td align="center" scope="row"><?php echo $row["playerId"]; ?></td> -->
  <td align="center" scope="row"><?php echo $row["playerName"]; ?></td>
  <td align="center" scope="row"><?php echo $row["teamId"]; ?></td>
  <td align="center" scope="row"><?php echo $row["height"]; ?></td>
  <td align="center" scope="row"><?php echo $row["weight"]; ?></td>
  <td align="center" scope="row"><?php echo $row["age"]; ?></td>
 </tr>
 <?php
}
}else {
  echo "0 results";
}
    ?>
  
  <table id="myTable">
  <tr class="header">
    <tr>
      <td align="center"><b>KCB Players</b></td>
  </tr>
    <!-- <th style="width:20%;">Playerid</th> -->
    <th style="width:20%;">Player Name</th>
    <th style="width:20%;">Teamid</th>
    <th style="width:20%;">Height</th>
    <th style="width:20%;">Weight</th>
    <th style="width:20%;">Age</th>

  </tr>
  <?php 
$select_qry="SELECT `playerId`, `playerName`, `teamId`, `height`, `weight`, `age` FROM `players` WHERE teamId =502";

$results=$conn->query($select_qry);

if ($results->num_rows>0){
  while ($row=$results->fetch_assoc()) {
 ?>
  <tr>
  <!-- <td align="center" scope="row"><?php echo $row["playerId"]; ?></td> -->
  <td align="center" scope="row"><?php echo $row["playerName"]; ?></td>
  <td align="center" scope="row"><?php echo $row["teamId"]; ?></td>
  <td align="center" scope="row"><?php echo $row["height"]; ?></td>
  <td align="center" scope="row"><?php echo $row["weight"]; ?></td>
  <td align="center" scope="row"><?php echo $row["age"]; ?></td>
 </tr>
 <?php
}
}else {
  echo "0 results";
}
    ?>

    <table id="myTable">
  <tr class="header">
    <tr>
      <td align="center"><b>Cooperative Bank Players</b></td>
  </tr>
    <!-- <th style="width:20%;">Playerid</th> -->
    <th style="width:20%;">Player Name</th>
    <th style="width:20%;">Teamid</th>
    <th style="width:20%;">Height</th>
    <th style="width:20%;">Weight</th>
    <th style="width:20%;">Age</th>

  </tr>
  <?php 
$select_qry="SELECT `playerId`, `playerName`, `teamId`, `height`, `weight`, `age` FROM `players` WHERE teamId =503";

$results=$conn->query($select_qry);

if ($results->num_rows>0){
  while ($row=$results->fetch_assoc()) {
 ?>
  <tr>
  <!-- <td align="center" scope="row"><?php echo $row["playerId"]; ?></td> -->
  <td align="center" scope="row"><?php echo $row["playerName"]; ?></td>
  <td align="center" scope="row"><?php echo $row["teamId"]; ?></td>
  <td align="center" scope="row"><?php echo $row["height"]; ?></td>
  <td align="center" scope="row"><?php echo $row["weight"]; ?></td>
  <td align="center" scope="row"><?php echo $row["age"]; ?></td>
 </tr>
 <?php
}
}else {
  echo "0 results";
}
    ?>

    <table id="myTable">
  <tr class="header">
    <tr>
      <td align="center"><b>Strathmore Players</b></td>
  </tr>
    <!-- <th style="width:20%;">Playerid</th> -->
    <th style="width:20%;">Player Name</th>
    <th style="width:20%;">Teamid</th>
    <th style="width:20%;">Height</th>
    <th style="width:20%;">Weight</th>
    <th style="width:20%;">Age</th>

  </tr>
  <?php 
$select_qry="SELECT `playerId`, `playerName`, `teamId`, `height`, `weight`, `age` FROM `players` WHERE teamId =504";

$results=$conn->query($select_qry);

if ($results->num_rows>0){
  while ($row=$results->fetch_assoc()) {
 ?>
  <tr>
  <!-- <td align="center" scope="row"><?php echo $row["playerId"]; ?></td> -->
  <td align="center" scope="row"><?php echo $row["playerName"]; ?></td>
  <td align="center" scope="row"><?php echo $row["teamId"]; ?></td>
  <td align="center" scope="row"><?php echo $row["height"]; ?></td>
  <td align="center" scope="row"><?php echo $row["weight"]; ?></td>
  <td align="center" scope="row"><?php echo $row["age"]; ?></td>
 </tr>
 <?php
}
}else {
  echo "0 results";
}
    ?>

    <table id="myTable">
  <tr class="header">
    <tr>
      <td align="center"><b>Ulinzi Players</b></td>
  </tr>
   <!--  <th style="width:20%;">Playerid</th> -->
    <th style="width:20%;">Player Name</th>
    <th style="width:20%;">Teamid</th>
    <th style="width:20%;">Height</th>
    <th style="width:20%;">Weight</th>
    <th style="width:20%;">Age</th>

  </tr>
  <?php 
$select_qry="SELECT `playerId`, `playerName`, `teamId`, `height`, `weight`, `age` FROM `players` WHERE teamId =505";

$results=$conn->query($select_qry);

if ($results->num_rows>0){
  while ($row=$results->fetch_assoc()) {
 ?>
  <tr>
  <!-- <td align="center" scope="row"><?php echo $row["playerId"]; ?></td> -->
  <td align="center" scope="row"><?php echo $row["playerName"]; ?></td>
  <td align="center" scope="row"><?php echo $row["teamId"]; ?></td>
  <td align="center" scope="row"><?php echo $row["height"]; ?></td>
  <td align="center" scope="row"><?php echo $row["weight"]; ?></td>
  <td align="center" scope="row"><?php echo $row["age"]; ?></td>
 </tr>
 <?php
}
}else {
  echo "0 results";
}
    ?>

    <table id="myTable">
  <tr class="header">
    <tr>
      <td align="center"><b>Prison Players</b></td>
  </tr>
    <!-- <th style="width:20%;">Playerid</th> -->
    <th style="width:20%;">Player Name</th>
    <th style="width:20%;">Teamid</th>
    <th style="width:20%;">Height</th>
    <th style="width:20%;">Weight</th>
    <th style="width:20%;">Age</th>

  </tr>
  <?php 
$select_qry="SELECT `playerId`, `playerName`, `teamId`, `height`, `weight`, `age` FROM `players` WHERE teamId =506";

$results=$conn->query($select_qry);

if ($results->num_rows>0){
  while ($row=$results->fetch_assoc()) {
 ?>
  <tr>
  <!-- <td align="center" scope="row"><?php echo $row["playerId"]; ?></td> -->
  <td align="center" scope="row"><?php echo $row["playerName"]; ?></td>
  <td align="center" scope="row"><?php echo $row["teamId"]; ?></td>
  <td align="center" scope="row"><?php echo $row["height"]; ?></td>
  <td align="center" scope="row"><?php echo $row["weight"]; ?></td>
  <td align="center" scope="row"><?php echo $row["age"]; ?></td>
 </tr>
 <?php
}
}else {
  echo "0 results";
}
    ?>

    <table id="myTable">
  <tr class="header">
    <tr>
      <td align="center"><b>All Stars Players</b></td>
  </tr>
    <!-- <th style="width:20%;">Playerid</th> -->
    <th style="width:20%;">Player Name</th>
    <th style="width:20%;">Teamid</th>
    <th style="width:20%;">Height</th>
    <th style="width:20%;">Weight</th>
    <th style="width:20%;">Age</th>

  </tr>
  <?php 
$select_qry="SELECT `playerId`, `playerName`, `teamId`, `height`, `weight`, `age` FROM `players` WHERE teamId =507";

$results=$conn->query($select_qry);

if ($results->num_rows>0){
  while ($row=$results->fetch_assoc()) {
 ?>
  <tr>
  <!-- <td align="center" scope="row"><?php echo $row["playerId"]; ?></td> -->
  <td align="center" scope="row"><?php echo $row["playerName"]; ?></td>
  <td align="center" scope="row"><?php echo $row["teamId"]; ?></td>
  <td align="center" scope="row"><?php echo $row["height"]; ?></td>
  <td align="center" scope="row"><?php echo $row["weight"]; ?></td>
  <td align="center" scope="row"><?php echo $row["age"]; ?></td>
 </tr>
 <?php
}
}else {
  echo "0 results";
}
    ?>

    <table id="myTable">
  <tr class="header">
    <tr>
      <td align="center"><b>KPA Players</b></td>
  </tr>
    <!-- <th style="width:20%;">Playerid</th> -->
    <th style="width:20%;">Player Name</th>
    <th style="width:20%;">Teamid</th>
    <th style="width:20%;">Height</th>
    <th style="width:20%;">Weight</th>
    <th style="width:20%;">Age</th>

  </tr>
  <?php 
$select_qry="SELECT `playerId`, `playerName`, `teamId`, `height`, `weight`, `age` FROM `players` WHERE teamId =508";

$results=$conn->query($select_qry);

if ($results->num_rows>0){
  while ($row=$results->fetch_assoc()) {
 ?>
  <tr>
  <!-- <td align="center" scope="row"><?php echo $row["playerId"]; ?></td> -->
  <td align="center" scope="row"><?php echo $row["playerName"]; ?></td>
  <td align="center" scope="row"><?php echo $row["teamId"]; ?></td>
  <td align="center" scope="row"><?php echo $row["height"]; ?></td>
  <td align="center" scope="row"><?php echo $row["weight"]; ?></td>
  <td align="center" scope="row"><?php echo $row["age"]; ?></td>
 </tr>
 <?php
}
}else {
  echo "0 results";
}
    ?>

    <table id="myTable">
  <tr class="header">
    <tr>
      <td align="center"><b>KCA Players</b></td>
  </tr>
    <!-- <th style="width:20%;">Playerid</th> -->
    <th style="width:20%;">Player Name</th>
    <th style="width:20%;">Teamid</th>
    <th style="width:20%;">Height</th>
    <th style="width:20%;">Weight</th>
    <th style="width:20%;">Age</th>

  </tr>
  <?php 
$select_qry="SELECT `playerId`, `playerName`, `teamId`, `height`, `weight`, `age` FROM `players` WHERE teamId =509";

$results=$conn->query($select_qry);

if ($results->num_rows>0){
  while ($row=$results->fetch_assoc()) {
 ?>
  <tr>
  <!-- <td align="center" scope="row"><?php echo $row["playerId"]; ?></td> -->
  <td align="center" scope="row"><?php echo $row["playerName"]; ?></td>
  <td align="center" scope="row"><?php echo $row["teamId"]; ?></td>
  <td align="center" scope="row"><?php echo $row["height"]; ?></td>
  <td align="center" scope="row"><?php echo $row["weight"]; ?></td>
  <td align="center" scope="row"><?php echo $row["age"]; ?></td>
 </tr>
 <?php
}
}else {
  echo "0 results";
}
    ?>

    <table id="myTable">
  <tr class="header">
    <tr>
      <td align="center"><b>Kivuli Players</b></td>
  </tr>
    <!-- <th style="width:20%;">Playerid</th> -->
    <th style="width:20%;">Player Name</th>
    <th style="width:20%;">Teamid</th>
    <th style="width:20%;">Height</th>
    <th style="width:20%;">Weight</th>
    <th style="width:20%;">Age</th>

  </tr>
  <?php 
$select_qry="SELECT `playerId`, `playerName`, `teamId`, `height`, `weight`, `age` FROM `players` WHERE teamId =510";

$results=$conn->query($select_qry);

if ($results->num_rows>0){
  while ($row=$results->fetch_assoc()) {
 ?>
  <tr>
  <!-- <td align="center" scope="row"><?php echo $row["playerId"]; ?></td> -->
  <td align="center" scope="row"><?php echo $row["playerName"]; ?></td>
  <td align="center" scope="row"><?php echo $row["teamId"]; ?></td>
  <td align="center" scope="row"><?php echo $row["height"]; ?></td>
  <td align="center" scope="row"><?php echo $row["weight"]; ?></td>
  <td align="center" scope="row"><?php echo $row["age"]; ?></td>
 </tr>
 <?php
}
}else {
  echo "0 results";
}
    ?>

    
<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

</body>
</html>
