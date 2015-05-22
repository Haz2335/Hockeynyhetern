<?php
session_start();
include_once("config.php");
header('Content-type: text/html; charset=utf-8');

$Number = $_POST['Number'];
@$NumberCheck = 0;


$HomeTeamId = $_POST['HomeTeamId'];
$RoadTeamId = $_POST['RoadTeamId'];
$Date = $_POST['Date'];


$results = $mysqli->query("SELECT * FROM `xgameinfo` WHERE HomeTeamId = $HomeTeamId AND RoadTeamId = $RoadTeamId");
    if ($results) { 

      
        while($obj = $results->fetch_object())
  {
    

    $gameId = $obj->matchID;
    //echo $gameId;
       

  }

   

}


$_SESSION["HomeTeamId"] = $HomeTeamId;
$_SESSION["RoadTeamId"] = $RoadTeamId;
$_SESSION["gameId"] = $gameId;



for ($i = 0; $i < $Number; $i++)
{
$NumberCheck++;

$TeamId = $_POST['TeamId'.$NumberCheck.''];

$GoalPlayer= $_POST['GoalPlayer'.$NumberCheck.''];
@$AssistOne= $_POST['AssistOne'.$NumberCheck.''];
@$AssistTwo= $_POST['AssistTwo'.$NumberCheck.''];
$Setup= $_POST['Setup'.$NumberCheck.''];

$Time= $_POST['Time'.$NumberCheck.''];
$Period= $_POST['Period'.$NumberCheck.''];



$sql  = "INSERT INTO `xgamescore` (`ID`, `MatchID`,`TeamId`,`goalPlayerId`,`assistOnePlayerId`,`assistTwoPlayerId`,`Setup`,`time`,`period`) VALUES
('','$gameId','$TeamId', '$GoalPlayer', '$AssistOne','$AssistTwo','$Setup','$Time','$Period')";

if ($mysqli->query($sql) === TRUE) {
    echo "New record created successfully<br>";
    header('Location: insertTackles.php');
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

}


 
/*@$TeamId = $_POST['TeamId1'];

@$GoalPlayer= $_POST['GoalPlayer1'];
@$AssistOne = $_POST['AssistOne1'];
@$AssistTwo = $_POST['AssistTwo1'];
@$Setup = $_POST['Setup1'];

@$Time = $_POST['Time1'];
@$Period = $_POST['Period1'];*/





// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 


/*$sql = "INSERT INTO `xgamescore` (`ID`, `gameId`,`TeamId`,`goalPlayerId`,`assistOnePlayerId`,`assistTwoPlayerId`,`Setup`,`time`,`period`) VALUES
('','$gameId','$TeamId', '$GoalPlayer', '$AssistOne','$AssistTwo','$Setup','$Time','$Period')";*/



$mysqli->close();
?>

