<?php
session_start();
include_once("config.php");
header('Content-type: text/html; charset=utf-8');

$HomeTeamId = $_SESSION["HomeTeamId"];
$RoadTeamId = $_SESSION["RoadTeamId"];
$gameId = $_SESSION["gameId"];

?>
Lag
<br>
<form action="insertTacklesData.php" method="post">
<select name="team">
<?php
$allTeams = $mysqli->query("SELECT * FROM teams WHERE ID = $HomeTeamId OR ID = $RoadTeamId");
if ($allTeams) { 
  while($team = $allTeams->fetch_object())
  {
?>
<option value="<?= $team->ID ?>"><?= $team->name ?></option>


<?php } ?>
<?php } ?>
</select><br/>
<br>

Hemmalag spelare
<br>
<select name="playerIdHomeTeam">
  <optgroup label="Hemmalag">
    <option value=""></option>
<?php
$allTeams = $mysqli->query("SELECT * FROM players as p, rplayerteams as rpt WHERE rpt.team = $HomeTeamId AND rpt.player = p.ID");
if ($allTeams) { 
  while($team = $allTeams->fetch_object())
  {
?>
<option value="<?= $team->ID ?>"><?= $team->surname?> <?= $team->lastname?></option>


<?php } ?>
<?php } ?>
</optgroup>
</select><br/>


Bortlag Spelare
<br>
<select name="playerIdRoadTeam">
<optgroup label="Bortalag">
<option value=""></option>
<?php
$allTeams = $mysqli->query("SELECT * FROM players as p, rplayerteams as rpt WHERE rpt.team = $RoadTeamId AND rpt.player = p.ID");
if ($allTeams) { 
  while($team = $allTeams->fetch_object())
  {
?>

<option value="<?= $team->ID ?>"><?= $team->surname?> <?= $team->lastname?></option>


<?php } ?>
<?php } ?>
</optgroup>
</select>

<br>
<br>
  
 Antal Tacklingar
  <br>
  <input type="text" name="tackles">
  <br>
    Utvisningsminuter
  <br>
  <input type="text" name="penaltyInMin"></input>
  <!--<select>
    <option value="2">2 min</option>
    <option value="5">4 min </option>
    <option value="5">5 min </option>
    <option value="10">10 min</option>
    <option value="20">20 min</option>
  </select>-->
  <br>
    Skott på mål
  <br>
  <input type="text" name="shotOnGoal">
  <br>
    +/-
  <br>
  <input type="text" name="plusMinus">
  <br>
    Tid
  <br>
  <input type="text" name="time">
  <br>
    Period
  <br>
  <input type="text" name="period">
  <br>
  <br>
  <input type="submit" value="skicka">

  <input type="hidden" value="<?php echo $gameId; ?>" name="gameId">
</form>

<br>
<form action="admin.php">
<input type="submit" Value="Gå tillbaka till Admin">
</form>


