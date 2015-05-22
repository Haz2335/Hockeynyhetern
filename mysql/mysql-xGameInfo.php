<?php
include_once("config.php");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 

// sql to create table
$sql = "
CREATE TABLE xGameInfo
(
matchID int  NOT NULL AUTO_INCREMENT,
date varchar(255),
LeagueID int,
HomeTeamId int,
RoadTeamId int,
HomeTeamScore int,
RoadTeamScore int,
PointsHomeTeam int,
PointsRoadTeam int,
PRIMARY KEY (matchID)
)";

if ($mysqli->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $mysqli->error;
}

$mysqli->close();
?>



