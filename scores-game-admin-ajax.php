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
  <link rel="stylesheet" type="text/css" href="css.css">
</head>

<body>

</body>
</html>
<?php
/* [INIT] */
require __DIR__  . "/constant.php" ;
require PATH_LIB . "scores-lib-game.php" ;
$gameDB = new Game();

/* [AJAX] */
switch ($_POST['req']) {
  default :
    echo "ERR";
    break;

  // SHOW ACTIVE GAMES
  // You might want to paginate these
  case "list":
    $games = $gameDB->getAlll(); ?>
    <h1 align="center">LAST RESULTS</h1>
    <!-- <input type="button" value="Create Game" onclick="admin.addEdit()"/> -->
    <table align="center" class="table">
    <?php 
    if (is_array($games)) {  foreach ($games as $g) {
      printf("<tr><td>[%s] %s-%s VS %s-%s</td><td>"
      . "<input type='button' value='Box Score' class='btn btn-secondary' onclick='score.show(%u)'/>"
      . "</td></tr>",
        $g['game_start'], $g['game_home'], $g['score_home'], $g['game_away'], $g['score_away'],
        $g['game_id'], $g['game_id'], $g['game_id']
     );
    }} else { echo "<tr><td>No games found.</td></tr>"; }
    ?>
    </table>
    <?php break;

  // SHOW ADD/EDIT GAME DOCKET
  // case "addEdit":
  //   $edit = is_numeric($_POST['id']);
  //   if ($edit) {
  //     $game = $gameDB->get($_POST['id']);
  //   } ?>
  //   <!-- <h1><?=$edit?"EDIT":"NEW"?> GAME</h1>
  //   <form onsubmit="return admin.save();">
  //     <input id="game_id" type="hidden" value="<?=$game['game_id']?>"/>
  //     <label for="game_home">Home team:</label>
  //     <input id="game_home" type="text" value="<?=$game['game_home']?>" required/>
  //     <br>
  //     <label for="game_away">Away team:</label>
  //     <input id="game_away" type="text" value="<?=$game['game_away']?>" required/>
  //     <br>
  //     <input type="button" value="Back" onclick="admin.list()"/>
  //     <input type="submit" value="Save"/>
  //   </form> -->
  //   <?php break;

  // ADD NEW GAME
  case "add":
    echo $gameDB->add($_POST['home'], $_POST['away']) ? "OK" : "ERR" ;
    break;

  // EDIT GAME
  case "edit":
    echo $gameDB->edit($_POST['home'], $_POST['away'], $_POST['id']) ? "OK" : "ERR" ;
    break;

  // DELETE GAME
  case "del":
    echo $gameDB->del($_POST['id']) ? "OK" : "ERR" ;
    break;

  // SHOW SCORE DOCKET FOR GAME
  case "score-show":
    $game = $gameDB->get($_POST['id']); ?>
    <h1 align='center' class="table"><?=$game['game_home']?> VS <?=$game['game_away']?></h1>
    <div id="scores"></div>
    <form onsubmit="return score.add();">
      <input type="hidden" id="game_id" value="<?=$game['game_id']?>"/>
<!--       <label for="score_home">Home Score</label>
      <input type="text" id="score_home" value="0" required/>
      <br>
      <label for="score_away">Away Score</label>
      <input type="text" id="score_away" value="0" required/>
      <br>
      <label for="score_comment">Comment</label>
      <input type="text" id="score_comment"/>
      <br> -->
      <input type="button" class='btn btn-secondary' align="center" value="Back" onclick="admin.list()"/>
      <!-- <input type="submit" value="Save"/> -->
    </form>
    <?php break;

  // SHOW SCORES
  case "score-history":
    $scores = $gameDB->getScore($_POST['id']);
    if (is_array($scores)) { 
      echo "<table align='center' class='table'> ";
      foreach ($scores as $s) {
        printf("<tr><td>[%s] Home - %s | Away - %s<br>%s</td><td>"
        
        . "</td></tr>", 
          $s['score_time'], $s['score_home'], $s['score_away'], $s['score_comment'],
          $_POST['id'], $s['score_time']
        );
      }
      echo "</table>";
    }
    break;

  
}
?>