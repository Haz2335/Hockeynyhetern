<?php
session_start();
include_once("config.php");


$player = mysql_real_escape_string($_REQUEST['test']);


if ($_SERVER['REQUEST_METHOD'] == "POST")
{
  $newTeam  = mysql_real_escape_string($_REQUEST['team']);
  $newStart = strtotime(mysql_real_escape_string($_REQUEST['start']));
  $newEnd   = strtotime(mysql_real_escape_string($_REQUEST['end']));
  $insertContract = $mysqli->query("INSERT INTO rplayerteams (player, team, start, end) VALUES ($player, $newTeam, $newStart, $newEnd);");

}



header('Content-type: text/html; charset=utf-8');

$playerInfo = $mysqli->query("SELECT * 
	                          FROM Players 
	                          Where id = $player;");

if ($playerInfo) { 
	$info = $playerInfo->fetch_object();
	$playerName = $info->surname." ".$info->lastname;
	$surname = $info->surname;
	$lastname = $info->lastname;

}
?>


<html>
<head>

	<link href="js/croppic/assets/css/croppic.css" rel="stylesheet">
	<meta charset="UTF-8">
	<script src="ckeditor/ckeditor.js"></script>
	<script src="js/croppic/croppic.min.js"></script>
</head>
<body>


<h3>Editera <?= $playerName ?></h3>
<form method="post" action=".php">
Förnamn: <input type="text" placeholder="Förnamn" name="surname" value="<?= $surname ?>">
<br>
<br>
<input type="submit" value="skicka">
</form>
Aktuella kontrakt:
<?php


$teams = $mysqli->query("SELECT t.name, t.id, rpt.start, rpt.end 
	                     FROM teams as t, rplayerteams as rpt 
	                     Where rpt.player = $player and 
	                           rpt.team = t.id;");
if ($teams) { 
  while($team = $teams->fetch_object())
  {
?>

Lagnamn: <?php print $team->name ?><br />
Började spela: <input type="text" value="<?= date("Y-m-d", $team->start) ?>" /><br/>
Slutade spela: <input type="text" value="<?= date("Y-m-d", $team->end) ?>" />
<?php } ?>
<?php } ?>
<br />
Lägg till nytt lag till spelare:<br />
<form action="?addTeam=yes" method="post">
	<input type="hidden" name="player" value="<?= $player ?>" />
<select name="team">
<?php
$allTeams = $mysqli->query("SELECT * FROM teams");
if ($allTeams) { 
  while($team = $allTeams->fetch_object())
  {
?>
<option value="<?= $team->ID ?>"><?= $team->name ?></option>


<?php } ?>
<?php } ?>
</select><br />
Kontraktsstart: <input type="text" name="start" /><br />
Kontraktsslut: <input type="text" name="end" /><br />
<input type="submit" />
</form>
</body>
</html>
