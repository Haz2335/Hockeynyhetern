<?php
session_start();
include_once("config.php");
header('Content-type: text/html; charset=utf-8');

@$GameLeagueId = $_POST['GameLeagueId'];
@$HomeTeamId = $_POST['HomeTeamId'];
@$RoadTeamId = $_POST['RoadTeamId'];
@$Date = $_POST['Date'];
@$HomeTeamScore = $_POST['HomeTeamScore'];
@$RoadTeamScore = $_POST['RoadTeamScore'];
@$HomeTeamPoints = $_POST['HomeTeamPoints'];
@$RoadTeamPoints = $_POST['RoadTeamPoints'];
@$Overtime = $_POST['Overtime'];

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 


//isset($_POST['Overtime'])

$sql = "INSERT INTO `xgameinfo` (`date`, `LeagueID`, `HomeTeamId`, `RoadTeamId`, `HomeTeamScore`, `RoadTeamScore`, `PointsHomeTeam`, `PointsRoadTeam`) VALUES
('$Date', '$GameLeagueId', '$HomeTeamId', '$RoadTeamId', '$HomeTeamScore', '$RoadTeamScore', '$HomeTeamPoints', '$RoadTeamScore')";

if (isset($_POST['Overtime']))
{
if ($HomeTeamScore > $RoadTeamScore)
{
$counter  = $mysqli->query("UPDATE teamTable SET gamesPlayed = (gamesPlayed+1) WHERE lagId = '$HomeTeamId'");
$counter8  = $mysqli->query("UPDATE teamTable SET gamesPlayed = (gamesPlayed+1) WHERE lagId = '$RoadTeamId'");
$counter2 = $mysqli->query("UPDATE teamTable SET overtimeWins = (overtimeWins+1) WHERE lagId = '$HomeTeamId'");
$counter3 = $mysqli->query("UPDATE teamTable SET overtimeLosses = (overtimeLosses+1) WHERE lagId = '$RoadTeamId'");

$counter5 = $mysqli->query("UPDATE teamTable SET goals = (goals+$HomeTeamScore) WHERE lagId = '$HomeTeamId'");
$counter6 = $mysqli->query("UPDATE teamTable SET goalsAgainst = (goalsAgainst+$RoadTeamScore)  WHERE lagId = '$HomeTeamId'");

$counter8 = $mysqli->query("UPDATE teamTable SET goals = (goals+$RoadTeamScore) WHERE lagId = '$RoadTeamId'");
$counter9 = $mysqli->query("UPDATE teamTable SET goalsAgainst = (goalsAgainst+$HomeTeamScore)  WHERE lagId = '$RoadTeamId'");

$counter7 = $mysqli->query("UPDATE teamTable SET totalPoints = (totalPoints+$HomeTeamPoints) WHERE lagId = '$HomeTeamId'");
$counter7 = $mysqli->query("UPDATE teamTable SET totalPoints = (totalPoints+$RoadTeamPoints) WHERE lagId = '$RoadTeamId'");
}
elseif ($HomeTeamScore < $RoadTeamScore) 
{
$counter  = $mysqli->query("UPDATE teamTable SET gamesPlayed = (gamesPlayed+1) WHERE lagId = '$HomeTeamId'");
$counter8  = $mysqli->query("UPDATE teamTable SET gamesPlayed = (gamesPlayed+1) WHERE lagId = '$RoadTeamId'");
$counter3 = $mysqli->query("UPDATE teamTable SET overtimeLosses = (overtimeLosses+1) WHERE lagId = '$HomeTeamId'");
$counter2 = $mysqli->query("UPDATE teamTable SET overtimeWins = (overtimeWins+1) WHERE lagId = '$RoadTeamId'");

$counter5 = $mysqli->query("UPDATE teamTable SET goals = (goals+$HomeTeamScore) WHERE lagId = '$HomeTeamId'");
$counter6 = $mysqli->query("UPDATE teamTable SET goalsAgainst = (goalsAgainst+$RoadTeamScore)  WHERE lagId = '$HomeTeamId'");

$counter8 = $mysqli->query("UPDATE teamTable SET goals = (goals+$RoadTeamScore) WHERE lagId = '$RoadTeamId'");
$counter9 = $mysqli->query("UPDATE teamTable SET goalsAgainst = (goalsAgainst+$HomeTeamScore)  WHERE lagId = '$RoadTeamId'");

$counter7 = $mysqli->query("UPDATE teamTable SET totalPoints = (totalPoints+$HomeTeamPoints) WHERE lagId = '$HomeTeamId'");
$counter7 = $mysqli->query("UPDATE teamTable SET totalPoints = (totalPoints+$RoadTeamPoints) WHERE lagId = '$RoadTeamId'");

}
}
elseif ($HomeTeamScore > $RoadTeamScore) 
{
$counter  = $mysqli->query("UPDATE teamTable SET gamesPlayed = (gamesPlayed+1) WHERE lagId = '$HomeTeamId'");
$counter8  = $mysqli->query("UPDATE teamTable SET gamesPlayed = (gamesPlayed+1) WHERE lagId = '$RoadTeamId'");
$counter1 = $mysqli->query("UPDATE teamTable SET wins = (wins+1) WHERE lagId = '$HomeTeamId'"); 
$counter4 = $mysqli->query("UPDATE teamTable SET losses = (losses+1) WHERE lagId = '$RoadTeamId'");

$counter5 = $mysqli->query("UPDATE teamTable SET goals = (goals+$HomeTeamScore) WHERE lagId = '$HomeTeamId'");
$counter6 = $mysqli->query("UPDATE teamTable SET goalsAgainst = (goalsAgainst+$RoadTeamScore)  WHERE lagId = '$HomeTeamId'");

$counter8 = $mysqli->query("UPDATE teamTable SET goals = (goals+$RoadTeamScore) WHERE lagId = '$RoadTeamId'");
$counter9 = $mysqli->query("UPDATE teamTable SET goalsAgainst = (goalsAgainst+$HomeTeamScore)  WHERE lagId = '$RoadTeamId'");

$counter7 = $mysqli->query("UPDATE teamTable SET totalPoints = (totalPoints+$HomeTeamPoints) WHERE lagId = '$HomeTeamId'");
$counter7 = $mysqli->query("UPDATE teamTable SET totalPoints = (totalPoints+$RoadTeamPoints) WHERE lagId = '$RoadTeamId'");
}
elseif ($HomeTeamScore < $RoadTeamScore)
{
$counter  = $mysqli->query("UPDATE teamTable SET gamesPlayed = (gamesPlayed+1) WHERE lagId = '$HomeTeamId'");
$counter8  = $mysqli->query("UPDATE teamTable SET gamesPlayed = (gamesPlayed+1) WHERE lagId = '$RoadTeamId'");
$counter4 = $mysqli->query("UPDATE teamTable SET losses = (losses+1) WHERE lagId = '$HomeTeamId'");
$counter1 = $mysqli->query("UPDATE teamTable SET wins = (wins+1) WHERE lagId = '$RoadTeamId'"); 

$counter5 = $mysqli->query("UPDATE teamTable SET goals = (goals+$HomeTeamScore) WHERE lagId = '$HomeTeamId'");
$counter6 = $mysqli->query("UPDATE teamTable SET goalsAgainst = (goalsAgainst+$RoadTeamScore)  WHERE lagId = '$HomeTeamId'");

$counter8 = $mysqli->query("UPDATE teamTable SET goals = (goals+$RoadTeamScore) WHERE lagId = '$RoadTeamId'");
$counter9 = $mysqli->query("UPDATE teamTable SET goalsAgainst = (goalsAgainst+$HomeTeamScore)  WHERE lagId = '$RoadTeamId'");

$counter7 = $mysqli->query("UPDATE teamTable SET totalPoints = (totalPoints+$HomeTeamPoints) WHERE lagId = '$HomeTeamId'");
$counter7 = $mysqli->query("UPDATE teamTable SET totalPoints = (totalPoints+$RoadTeamPoints) WHERE lagId = '$RoadTeamId'");
}





//$counter1 = $mysqli->query("UPDATE teamTable SET wins = (wins+1) WHERE lagId = '$HomeTeamId'"); 
//$counter3 = $mysqli->query("UPDATE teamTable SET overtimeLosses = (overtimeLosses+1) WHERE lagId = '$HomeTeamId'");
//$counter4 = $mysqli->query("UPDATE teamTable SET losses = (losses+1) WHERE lagId = '$HomeTeamId'");

if ($mysqli->query($sql) === TRUE) {
    echo "New record created successfully";
    //header('Location: admin.php');
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$TotalGameGoals = $RoadTeamScore+$HomeTeamScore;
$number="0";
?>

<h3>Match Fakta Mål</h3>

<form method="post" action="insertGameFacts.php">

<?php 
while ($TotalGameGoals > $number )
{
?>
<?php
$number++;
?>

<?php print "Mål";?>
<?php echo $number; ?>
<?php echo "<br>"; print "Lag";  ?>
<br>

<select name='TeamId<?=$number?>'>
<?php
$allTeams = $mysqli->query("SELECT * FROM teams WHERE ID = $HomeTeamId OR ID = $RoadTeamId");
if ($allTeams) { 
  while($team = $allTeams->fetch_object())
  {
?>
<option value="<?= $team->ID ?>"><?= $team->name?></option>


<?php } ?>
<?php } ?>
</select><br/>


<br>
Målgörare
<br>


<select name="GoalPlayer<?=$number?>">
<optgroup label="Hemmalag Spelare">
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

<optgroup label="Bortalag Spelare">
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



<!---
<select name="GoalPlayer<?=$number?>">
<?php
$allTeams = $mysqli->query("SELECT * FROM players ");
if ($allTeams) { 
  while($team = $allTeams->fetch_object())
  {
?>
<option value="<?= $team->ID ?>"><?= $team->surname?><?= $team->lastname?></option>


<?php } ?>
<?php } ?>
</select><br/>
<br>-->

Assist 1
<br>
<select name="AssistOne<?=$number?>">
<optgroup label="Hemmalag Spelare">
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

<optgroup label="Bortalag Spelare">
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
<option value="">INGEN ASSIST</option>
</select>
<br>
<br>

Assist 2
<br>
<select name="AssistTwo<?=$number?>">
<optgroup label="Hemmalag Spelare">
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

<optgroup label="Bortalag Spelare">
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
<option value="">INGEN ASSIST</option>
</select>

<br>
<br>
Setup
<br>
<select name="Setup<?=$number?>">

<option value="">Normal</option>
<option value="PP">PP</option>
<option value="BP">BP</option>


</select><br/>
<br>

<br>
	<input type="text" name="Time<?=$number?>" placeholder="Time">
	<br>
	<br>
	<input type="text" name="Period<?=$number?>" placeholder="Period">
	<br>
	<br>
	

<hr>

<?php } ?>

<input type="hidden" value="<?=$number?>" name="Number">
<input type="hidden" value="<?php echo $RoadTeamId; ?>" name="RoadTeamId">
<input type="hidden" value="<?php echo $HomeTeamId; ?>" name="HomeTeamId">
<input type="hidden" value="<?php echo $Date; ?>" name="Date">
<input type="submit" value="skicka">
</form>


<?php
$mysqli->close();
?>

