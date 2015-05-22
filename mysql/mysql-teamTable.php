<?php
include_once("config.php");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 

// sql to create table
$sql = "
CREATE TABLE teamTable
(
ID int  NOT NULL AUTO_INCREMENT,
lagId int,
gamesPlayed int,
wins int,
overtimeWins int,
overtimeLosses int,
losses int,
scoreDifference int,
totalPoints int,
PRIMARY KEY (ID)
)";

if ($mysqli->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $mysqli->error;
}

$mysqli->close();
?>



