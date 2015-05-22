<?php
include_once("config.php");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 

// sql to create table
$sql = "
CREATE TABLE Leagues
(
ID int  NOT NULL AUTO_INCREMENT,
name varchar(255),
URL varchar(255),
scoreW varchar(255),
scoreOW varchar(255),
scoreOL varchar(255),
CDP varchar(255),
CSPL varchar(255),
image varchar(255),
PRIMARY KEY (ID)
)";

if ($mysqli->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $mysqli->error;
}

$mysqli->close();
?>



