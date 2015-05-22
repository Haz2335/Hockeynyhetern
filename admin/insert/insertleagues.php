<?php
session_start();
include_once("config.php");
header('Content-type: text/html; charset=utf-8');

@$leaguename = $_POST['leaguename'];
@$url = $_POST['url'];
@$scoreW = $_POST['scoreW'];
@$scoreOW = $_POST['scoreOW'];
@$scoreOL = $_POST['scoreOL'];
@$CDP = $_POST['CDP'];
@$CSPL = $_POST['CSPL'];
@$image = $_POST['image'];


// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 



$sql = "INSERT INTO `leagues` (`name`, `URL`, `scoreW`, `scoreOW`, `scoreOL`, `CDP`, `CSPL`, `image`) VALUES
('$leaguename', '$url', '$scoreW', '$scoreOW', '$scoreOL','$CDP', 'CSPL', '$image')";


if ($mysqli->query($sql) === TRUE) {
    echo "New record created successfully";
    header('Location: admin.php');
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}
$mysqli->close();
?>




