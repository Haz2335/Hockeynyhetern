<?php
include_once("config.php");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 

// sql to create table
$sql = "
CREATE TABLE playerTable
(
ID int  NOT NULL AUTO_INCREMENT,
playerId int,
gamesPlayed int,
goals int,
assists int,
penaltyInMinutes int,
tackles int,
shotsOnGoal int,
plusMinus int,
PRIMARY KEY (ID)
)";

if ($mysqli->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $mysqli->error;
}

$mysqli->close();
?>


