
<?php
include_once("config.php");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 

// sql to create table
$sql = "CREATE DATABASE IF NOT EXISTS `hockey`";

if ($mysqli->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $mysqli->error;
}

$mysqli->close();
?>

