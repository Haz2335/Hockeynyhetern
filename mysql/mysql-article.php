<?php
include_once("config.php");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 

// sql to create table
$sql = "
CREATE TABLE article
(
ID int  NOT NULL AUTO_INCREMENT,
imageName varchar(255),
thumbnail varchar(255),
imageText varchar(255),
Heading varchar(255),
articleText varchar(255),
summary varchar(255),
priority varchar(255),
tags varchar(255),
PRIMARY KEY (ID)
)";

if ($mysqli->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $mysqli->error;
}

$mysqli->close();
?>



