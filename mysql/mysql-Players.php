<?php
include_once("config.php");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 

// sql to create table
$sql = "
CREATE TABLE Players
(
ID int  NOT NULL AUTO_INCREMENT,
surname varchar(255),
lastname varchar(255),
birthday varchar(255),
city varchar(255),
country varchar(255),
image varchar(255),
URL varchar(255),
text varchar(255),
imageText varchar(255),
PRIMARY KEY (ID)
)";

if ($mysqli->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $mysqli->error;
}

$mysqli->close();
?>



