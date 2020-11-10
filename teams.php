<?php
require_once "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
  <title>Teams</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css.css">
  <script src="public/scores-game-admin.js"></script>
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
            <!-- <li> <a href="Shoppingcart/index.php">Shop</a></li>  -->  
                    <li> <a href="teams.php">Teams</a></li>
                    <li> <a href="form.php">My Account</a></li>

          </ul>
        </div>
      </div>
   </nav>

<div class="container-fluid">
  <div class="row content">

    <div class="col-sm-3 sidenav">

      <h4></h4>
      
      <div id="container"></div>
    </div>

    <div class="col-sm-9">
      <h2 align="center">LEAGUE TEAMS</h2>
      <hr>
      <h2></h2>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

<table id="myTable">
  <tr class="header">
    <!-- <th style="width:20%;">Teamid</th> -->
    <th style="width:20%;">Team Name</th>
    <th style="width:20%;">Coach Name</th>
    <th style="width:20%;">City</th>
  </tr>
  <?php 
$select_qry="SELECT teamName, coachName, cityName FROM `teams` INNER JOIN `players` ON `teams`.`playerId`=`players`.`playerId`\n"

    . "INNER JOIN `coaches` ON `teams`.`coachId`=`coaches`.`coachId`\n"

    . "INNER JOIN `city`ON `teams`.`cityId`=`city`.`cityId`";
$results=$conn->query($select_qry);

if ($results->num_rows>0){
  while ($row=$results->fetch_assoc()) {
 ?>
  <tr>
  <!-- <td align="center" scope="row"><?php echo $row["teamId"]; ?></td> -->
  <td align="center" scope="row"><?php echo $row["teamName"]; ?></td>
  <td align="center" scope="row"><?php echo $row["coachName"]; ?></td>
  <td align="center" scope="row"><?php echo $row["cityName"]; ?></td>
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
<br><br>


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
