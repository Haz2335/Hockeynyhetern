<?php
session_start();
include_once("config.php");




?>

<?php
if ($_SERVER['REQUEST_METHOD'] == "POST")
{
  $team  = mysql_real_escape_string($_REQUEST['team']);
  $league = mysql_real_escape_string($_REQUEST['league']);
  $insert = $mysqli->query("INSERT INTO rteamsleagues (team, league) VALUES ($team, $league);");

}
 ?>



<form action="?addTeamleague=yes" method="post">

<select name="team">
<?php
$allTeams = $mysqli->query("SELECT * FROM teams");
if ($allTeams) { 
  while($team = $allTeams->fetch_object())
  {
?>
<option value="<?= $team->ID ?>"><?= $team->name ?></option>
<br>


<?php } ?>
<?php } ?>
</select><br/>

<select name="league">
<?php
$allLeagues = $mysqli->query("SELECT * FROM leagues");
if ($allLeagues) { 
  while($leagues = $allLeagues->fetch_object())
  {
?>
<option value="<?= $leagues->ID ?>"><?= $leagues->name ?></option>


<?php } ?>
<?php } ?>

</select><br/>

<input type="submit" value="skicka">
</form>
