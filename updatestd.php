
<?php
require_once "connection.php";

$team1 = $_POST['team1'];
$team2 = $_POST['team2'];
$team1score = (int) $_POST['team1score'];
$team2score = (int) $_POST['team2score'];
$div = $_POST['div'];

//winner gets 2 points while the losing team gets 0 points
if($team1score > $team2score){
    $sql="UPDATE `standings` SET `standingId`=standingId,`teamId`=teamId,`win`=win+1,`loss`=loss,`played`=played+1,`points`=points+2 WHERE standingId='".$team1."'";
        if ($conn->query($sql) === TRUE) {
        	header("Location: 3a-game-admin.php");
        		exit();
            //echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }

        $sql="UPDATE `standings` SET `standingId`=standingId,`teamId`=teamId,`win`=win+0,`loss`=loss+1,`played`=played+1,`points`=points+0 WHERE standingId='".$team2."'";
            if ($conn->query($sql) === TRUE) {
            	header("Location: 3a-game-admin.php");
            		exit();
                //echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $conn->error;
            }

}
//winner gets 2 points while the losing team gets 0 points
elseif($team1score < $team2score) {
  $sql="UPDATE `standings` SET `standingId`=standingId,`teamId`=teamId,`win`=win+1,`loss`=loss+0,`played`=played+1,`points`=points+2 WHERE standingId='".$team2."'";
if ($conn->query($sql) === TRUE) {
    header("Location: 3a-game-admin.php");
		exit();
    //echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$sql="UPDATE `standings` SET `standingId`=standingId,`teamId`=teamId,`win`=win+0,`loss`=loss+1,`played`=played+1,`points`=points+0 WHERE standingId='".$team1."'";
if ($conn->query($sql) === TRUE) {
    header("Location: 3a-game-admin.php");
		exit();
    //echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
}
//if they draw each get one points
elseif($team1score == $team2score) {
  $sql="UPDATE `standings` SET `standingId`=standingId,`teamId`=teamId,`win`=win+0,`loss`=loss+0,`played`=played+1,`points`=points+1 WHERE standingId='".$team2."'";
if ($conn->query($sql) === TRUE) {
    header("Location: 3a-game-admin.php");
		exit();
    //echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$sql="UPDATE `standings` SET `standingId`=standingId,`teamId`=teamId,`win`=win+0,`loss`=loss+0,`played`=played+1,`points`=points+1 WHERE standingId='".$team1."'";
if ($conn->query($sql) === TRUE) {
    header("Location: 3a-game-admin.php");
		exit();
    //echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
}
$conn->close();
?>



