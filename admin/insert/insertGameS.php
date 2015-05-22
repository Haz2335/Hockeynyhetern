<?php
session_start();
include_once("config.php");
header('Content-type: text/html; charset=utf-8');

@$GameLeagueId = $_POST['GameLeagueId'];
@$HomeTeamId = $_POST['HomeTeamId'];
@$RoadTeamId = $_POST['RoadTeamId'];
@$Date = $_POST['GameDate'];


// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 





$sql = "INSERT INTO `gameschedule` (`LeagueID`, `HomeTeamId`, `RoadTeamId`,`GameDate`) VALUES
('$GameLeagueId', '$HomeTeamId', '$RoadTeamId', '$Date')";



if ($mysqli->query($sql) === TRUE) {
    echo "New record created successfully";
    header('Location: admin.php');
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}






$mysqli->close();
?>

