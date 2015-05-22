<?php
session_start();
include_once("config.php");
header('Content-type: text/html; charset=utf-8');

$image = $_POST['image'];
$thumbnail = $_POST['thumbnail'];
$imageText = $_POST['imagetext'];
$heading = $_POST['heading'];
$articletext = $_POST['editor1'];
$summary = $_POST['summary'];
$priority = $_POST['priority'];
$articleUrl = $_POST['articleUrl'];
$date = $_POST['date'];

$tags1 = $_POST['Tags1'];
$tags2 = $_POST['Tags2'];
$tags3 = $_POST['Tags3'];
$tags4 = $_POST['Tags4'];
$tags5 = $_POST['Tags5'];


//$myfile = fopen("artiklar/$articleUrl.php", "w");

//$txt = file_get_contents('artiklar/mall.php');
//fwrite($myfile, $txt);
//fclose($myfile);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 

$sql = "INSERT INTO `article` (`imageName`, `thumbnail`, `imageText`, `heading`, `articleText`, `summary`, `priority`, `articleUrl`,`date`) VALUES
('$image', '$thumbnail', '$imageText', '$heading', '$articletext','$summary','$priority','$articleUrl', '$date' )";


if ($mysqli->query($sql) === TRUE) {
    echo "New record created successfully";
    header('Location: admin.php');
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}


$results = $mysqli->query("SELECT ID FROM article ORDER BY ID DESC LIMIT 1;");
    if ($results) { 

      
        while($obj = $results->fetch_object())
  {
    
  	//$article = $obj->heading;
  	//echo $article;

    $articleId = $obj->ID;
    

  }

}


$tags = $mysqli->query("INSERT INTO `rarticletags` (`ID`, `articleId`, `tagId`) VALUES
('', '$articleId', '$tags1')");

$tags = $mysqli->query("INSERT INTO `rarticletags` (`ID`, `articleId`, `tagId`) VALUES
('', '$articleId', '$tags2')");

$tags = $mysqli->query("INSERT INTO `rarticletags` (`ID`, `articleId`, `tagId`) VALUES
('', '$articleId', '$tags3')");

$tags = $mysqli->query("INSERT INTO `rarticletags` (`ID`, `articleId`, `tagId`) VALUES
('', '$articleId', '$tags4')");

$tags = $mysqli->query("INSERT INTO `rarticletags` (`ID`, `articleId`, `tagId`) VALUES
('', '$articleId', '$tags5')");






$mysqli->close();
?>
