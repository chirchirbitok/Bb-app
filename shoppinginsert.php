<?php
session_start();
require_once "connection.php";


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

    
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="post" action="process_shopping_cart.php" >
                    <fieldset>
                        <legend class="text-center header">Shopping Cart Information</legend>
                        

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="name" name="name" value = "<?php if(isset($_SESSION['name'])){ echo stripslashes($_SESSION['name']); unset($_SESSION['name']); } ?>" type="text" placeholder="Item Name" class="form-control" required = "">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="code" name="code" value = "<?php if(isset($_SESSION['code'])){ echo stripslashes($_SESSION['code']); unset($_SESSION['code']); } ?>" type="text" placeholder="Item Code" class="form-control" required = "">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="price" name="price" value = "<?php if(isset($_SESSION['price'])){ echo stripslashes($_SESSION['price']); unset($_SESSION['price']); } ?>" type="text" placeholder="Item Price" class="form-control" required = "">
                            </div>
                        </div>


                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input type="file" name = "Image" value="<?php if(isset($_SESSION['filename'])){ echo stripslashes($_SESSION['filename']); unset($_SESSION['filename']); } ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" name="cart" class="btn btn-primary btn-lg">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
   <!--Copyright-->
    <div class="footer-copyright py-3 text-center">
      <div class="container-fluid">
        © 2019 Copyright:  Douglas Bitok

      </div>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

</footer>
<!-- Footer -->
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
<style type="text/css">
    .double-nav .breadcrumb-dn {
  color: #fff;
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