<?php
session_start();
include_once("config.php");
header('Content-type: text/html; charset=utf-8');

@$surname = $_POST['surname'];
@$lastname = $_POST['lastname'];
@$birthday = $_POST['birthday'];
@utf8_encode ($city) = $_POST['city'];
@$country = $_POST['country'];
@$image = $_POST['image'];
@$URL = $_POST['URL'];
@$info = $_POST['info'];
@$imageText = $_POST['imageText'];



// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 



$sql = "INSERT INTO `players` (`surname`, `lastname`, `birthday`, `city`, `country`, `image`, `URL`, `text`,`imageText`) VALUES
('$surname', '$lastname', '$birthday', '$city', '$country','$image', '$URL', '$info','$imageText')";


if ($mysqli->query($sql) === TRUE) {
    echo "New record created successfully";
    header('Location: admin.php');
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}
$mysqli->close();
?>




<?php