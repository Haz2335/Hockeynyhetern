<?php
session_start();
include_once("config.php");
header('Content-type: text/html; charset=utf-8');

$gameId = $_POST['gameId'];
$team = $_POST['team'];
@$playerIdHomeTeam = $_POST['playerIdHomeTeam'];
@$playerIdRoadTeam = $_POST['playerIdRoadTeam'];

$tackles = $_POST['tackles']
$penaltyInMin = $_POST['penaltyInMin'];
$plusMinus = $_POST['plusMinus'];
$time = $_POST['time'];
$period = $_POST['period'];
$shotOnGoal = $_POST['shotOnGoal'];

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 


//isset($_POST['Overtime'])
if ($playerIdRoadTeam == "" )
{
$sql = "INSERT INTO `tackles`(`ID`, `gameId`, `teamId`, `playerId`, `tackles`, `penaltyInMin`, `plusMinus`, `time`, `period`, `shotOnGoal`) VALUES
('', '$gameId', '$team', '$playerIdHomeTeam','$tackles', '$penaltyInMin', '$plusMinus', '$time', '$period', '$shotOnGoal')";
}
elseif ($playerIdHomeTeam == "") 
{
$sql = "INSERT INTO `tackles`(`ID`, `gameId`, `teamId`, `playerId`, `tackleType`, `penaltyInMin`, `plusMinus`, `time`, `period`, `shotOnGoal`) VALUES
('', '$gameId', '$team', '$playerIdRoadTeam','', '$penaltyInMin', '$plusMinus', '$time', '$period', '$shotOnGoal')";
}

if ($mysqli->query($sql) === TRUE) {
    echo "New record created successfully";
    header('Location: insertTackles.php');
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

?>