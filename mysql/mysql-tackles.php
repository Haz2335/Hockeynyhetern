<?php
include_once("config.php");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 

// sql to create table
$sql = "
CREATE TABLE tackles
(
ID int  NOT NULL AUTO_INCREMENT,
gameId int,
teamId int,
playerId int,
tackleType int,
penaltyInMin int,
plusMinus int,
time int, 
period int, 
PRIMARY KEY (ID)
)";

if ($mysqli->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $mysqli->error;
}

$mysqli->close();
?>
