<?php
session_start();
include_once("config.php");
header('Content-type: text/html; charset=utf-8');


?>


<html>
<head>

	<link href="js/croppic/assets/css/croppic.css" rel="stylesheet">
	<meta charset="UTF-8">
	<script src="ckeditor/ckeditor.js"></script>
	<script src="js/croppic/croppic.min.js"></script>
</head>
<body>

<h3>Lägg till spelare</h3>
<form method="post" action="insertplayers.php">
<input type="text" placeholder="Namn" name="surname">
<br>
<input type="text" placeholder="Efternamn" name="lastname">
<br>
<input type="text" placeholder="Födelsedatum" name="birthday">
<br>
<input type="text" placeholder="Stad" name="city">
<br>
<input type="text" placeholder="Land" name="country">
<br>
<input type="text" placeholder="Image" name="image">
<br>
<input type="text" placeholder="URL" name="URL">
<br>
<input type="text" placeholder="Info" name="info">
<br>
<input type="text" placeholder="Bildtext" name="imageText">
<br>
<br>
<input type="submit" value="skicka">
</form>

<h3>Lägg till liga</h3>
<form method="post" action="insertleagues.php">
<input type="text" placeholder="Namn" name="leaguename">
<br>
<input type="text" placeholder="url" name="url">
<br>
<input type="text" placeholder="PoängW" name="scoreW">
<br>
<input type="text" placeholder="PoängOW" name="scoreOW">
<br>
<input type="text" placeholder="PoängOL" name="scoreOL">
<br>
<input type="text" placeholder="CDP" name="CDP">
<br>
<input type="text" placeholder="CSPL" name="CSPL">
<br>
<input type="text" placeholder="Image" name="image">
<br>
<br>
<input type="submit" value="skicka">
</form>

<h3>Lägg till lag</h3>
<form method="post" action="insertteams.php">
<input type="text" placeholder="Lagnamn" name="teamname">
<br>
<input type="text" placeholder="kortnamn" name="Shortname">
<br>
<input type="text" placeholder="url" name="urlteam">
<br>
<input type="text" placeholder="text" name="infoteam">
<br>
<input type="text" placeholder="bild" name="imageteam">
<br>
<select name="team">
<?php
$allTeams = $mysqli->query("SELECT * FROM leagues");
if ($allTeams) { 
  while($team = $allTeams->fetch_object())
  {
?>
<option value="<?= $team->ID ?>"><?= $team->name ?></option>


<?php } ?>
<?php } ?>
</select><br/>
<input type="submit" value="skicka">
</form>


<h3>Ny Artikel</h3>
<form method="post" action="insertarticle.php">

<div style="height:300px; width:500px;">
			<div class="col-lg-4 ">
				<h4 class="centered"> OUTPUT </h4>
				<p class="centered">( display url after cropping )</p>
				<div id="cropContaineroutput"></div>
				<input type="text" id="cropOutput" style="width:100%; padding:5px 4%; margin:20px auto; display:block; border: 1px solid #CCC;" />
			</div>
			</div>

<br>
<input type="text" placeholder="url" name="articleUrl">
<br>
<input type="text" placeholder="image" name="image">
<br>
<input type="text" placeholder="thumbnail" name="thumbnail">
<br>
<input type="text" placeholder="imagetext" name="imagetext">
<br>
<input type="text" placeholder="rubrik" name="heading">
<br>
<br>
<textarea name="editor1" id="editor1" rows="10" cols="80">
                This is my textarea to be replaced with CKEditor.
</textarea>
<br>
<br>
<input type="text" placeholder="sammanfattning" name="summary">
<br>
<input type="text" placeholder="prioritering" name="priority">
<br>
<input type="hidden" name="date" value= <?php echo date("Y-m-d/h:i:s");?>>
<br>
<br>
Taggar
<br>
<!-- Tag start-->

<select name="Tags1">
<optgroup label="Lag">
<?php 
$allTeams = $mysqli->query("SELECT * FROM teams ORDER BY name");
if ($allTeams) { 
  while($team = $allTeams->fetch_object())
  {
?>
<option value="<?= $team->name ?>"><?= $team->name ?></option>


<?php } ?>
<?php } ?>
</optgroup>
<optgroup label="Spelare">
<?php 
$allTeams = $mysqli->query("SELECT * FROM players ORDER BY surname");
if ($allTeams) { 
  while($team = $allTeams->fetch_object())
  {
?>
<option value="<?= $team->surname ?> <?= $team->lastname ?>"><?= $team->surname ?> <?= $team->lastname ?></option>


<?php } ?>
<?php } ?>
</optgroup>

<optgroup label="Liga">
<?php 
$allTeams = $mysqli->query("SELECT * FROM leagues ORDER BY name");
if ($allTeams) { 
  while($team = $allTeams->fetch_object())
  {
?>

<option value="<?= $team->name ?>"><?= $team->name ?></option>


<?php } ?>
<?php } ?>
</optgroup>
</select><br/>

<!-- Tag start-->

<select name="Tags2">
<optgroup label="Lag">
<?php 
$allTeams = $mysqli->query("SELECT * FROM teams ORDER BY name");
if ($allTeams) { 
  while($team = $allTeams->fetch_object())
  {
?>
<option value="<?= $team->name ?>"><?= $team->name ?></option>


<?php } ?>
<?php } ?>
</optgroup>
<optgroup label="Spelare">
<?php 
$allTeams = $mysqli->query("SELECT * FROM players ORDER BY surname");
if ($allTeams) { 
  while($team = $allTeams->fetch_object())
  {
?>
<option value="<?= $team->surname ?> <?= $team->lastname ?>"><?= $team->surname ?> <?= $team->lastname ?></option>


<?php } ?>
<?php } ?>
</optgroup>

<optgroup label="Liga">
<?php 
$allTeams = $mysqli->query("SELECT * FROM leagues ORDER BY name");
if ($allTeams) { 
  while($team = $allTeams->fetch_object())
  {
?>

<option value="<?= $team->name ?>"><?= $team->name ?></option>


<?php } ?>
<?php } ?>
</optgroup>
</select><br/>


<!-- Tag start-->

<select name="Tags3">
<optgroup label="Lag">
<?php 
$allTeams = $mysqli->query("SELECT * FROM teams ORDER BY name");
if ($allTeams) { 
  while($team = $allTeams->fetch_object())
  {
?>
<option value="<?= $team->name ?>"><?= $team->name ?></option>


<?php } ?>
<?php } ?>
</optgroup>
<optgroup label="Spelare">
<?php 
$allTeams = $mysqli->query("SELECT * FROM players ORDER BY surname");
if ($allTeams) { 
  while($team = $allTeams->fetch_object())
  {
?>
<option value="<?= $team->surname ?> <?= $team->lastname ?>"><?= $team->surname ?> <?= $team->lastname ?></option>


<?php } ?>
<?php } ?>
</optgroup>

<optgroup label="Liga">
<?php 
$allTeams = $mysqli->query("SELECT * FROM leagues ORDER by name");
if ($allTeams) { 
  while($team = $allTeams->fetch_object())
  {
?>

<option value="<?= $team->name ?>"><?= $team->name ?></option>


<?php } ?>
<?php } ?>
</optgroup>
</select><br/>


<select name="Tags4">
<optgroup label="Lag">
<?php 
$allTeams = $mysqli->query("SELECT * FROM teams ORDER BY name");
if ($allTeams) { 
  while($team = $allTeams->fetch_object())
  {
?>
<option value="<?= $team->name?>"><?= $team->name ?></option>


<?php } ?>
<?php } ?>
</optgroup>
<optgroup label="Spelare">
<?php 
$allTeams = $mysqli->query("SELECT * FROM players ORDER BY surname");
if ($allTeams) { 
  while($team = $allTeams->fetch_object())
  {
?>
<option value="<?= $team->surname?> <?= $team->lastname?>"><?= $team->surname ?> <?= $team->lastname ?></option>


<?php } ?>
<?php } ?>
</optgroup>

<optgroup label="Liga">
<?php 
$allTeams = $mysqli->query("SELECT * FROM leagues ORDER BY name");
if ($allTeams) { 
  while($team = $allTeams->fetch_object())
  {
?>

<option value="<?= $team->name?>"><?= $team->name ?></option>


<?php } ?>
<?php } ?>
</optgroup>
</select><br/>

<!-- Tag start-->

<select name="Tags5">
<optgroup label="Lag">
<?php 
$allTeams = $mysqli->query("SELECT * FROM teams ORDER BY name");
if ($allTeams) { 
  while($team = $allTeams->fetch_object())
  {
?>
<option value="<?= $team->name?>"><?= $team->name ?></option>


<?php } ?>
<?php } ?>
</optgroup>
<optgroup label="Spelare">
<?php 
$allTeams = $mysqli->query("SELECT * FROM players ORDER by surname");
if ($allTeams) { 
  while($team = $allTeams->fetch_object())
  {
?>
<option value="<?= $team->surname?> <?= $team->lastname?>"><?= $team->surname ?> <?= $team->lastname ?></option>


<?php } ?>
<?php } ?>
</optgroup>

<optgroup label="Liga">
<?php 
$allTeams = $mysqli->query("SELECT * FROM leagues ORDER by name");
if ($allTeams) { 
  while($team = $allTeams->fetch_object())
  {
?>

<option value="<?= $team->name?>"><?= $team->name ?></option>


<?php } ?>
<?php } ?>
</optgroup>
</select><br/>



<input type="submit" value="skicka">
</form>


<br>
<br>


<h3>Kommande Matcher</h3>

<form method="post" action="insertGameS.php">

Liga
<br>
<select name="GameLeagueId">
<?php
$allTeams = $mysqli->query("SELECT * FROM leagues");
if ($allTeams) { 
  while($team = $allTeams->fetch_object())
  {
?>
<option value="<?= $team->ID ?>"><?= $team->name ?></option>


<?php } ?>
<?php } ?>
</select><br/>


Hemma Lag
<br>
<select name="HomeTeamId">
<?php
$allTeams = $mysqli->query("SELECT * FROM teams ORDER BY name");
if ($allTeams) { 
  while($team = $allTeams->fetch_object())
  {
?>
<option value="<?= $team->ID ?>"><?= $team->name ?></option>


<?php } ?>
<?php } ?>
</select><br/>


Borta Lag
<br>
<select name="RoadTeamId">
<?php
$allTeams = $mysqli->query("SELECT * FROM teams ORDER BY name");
if ($allTeams) { 
  while($team = $allTeams->fetch_object())
  {
?>
<option value="<?= $team->ID ?>"><?= $team->name ?></option>


<?php } ?>
<?php } ?>
</select><br/>
<br>
	<input type="text" name="GameDate" placeholder="Datum">
	<br>
	<br>
	<input type="submit" value="skicka">
</form>


<br>
<br>





<h3>MatchFakta</h3>
<form method="post" action="insertxGamesInfo.php">

Liga
<br>
<select name="GameLeagueId">
<?php
$allLeagues = $mysqli->query("SELECT * FROM leagues");
if ($allLeagues) { 
  while($Leagues = $allLeagues->fetch_object())
  {
?>
<option value="<?= $Leagues->ID ?>"><?= $Leagues->name ?></option>


<?php } ?>
<?php } ?>
</select><br/>


Hemma Lag
<br>
<select name="HomeTeamId">
<?php
$allTeams = $mysqli->query("SELECT * FROM teams ORDER BY name");
if ($allTeams) { 
  while($team = $allTeams->fetch_object())
  {
?>
<option value="<?= $team->ID ?>"><?= $team->name ?></option>


<?php } ?>
<?php } ?>
</select><br/>


Borta Lag
<br>
<select name="RoadTeamId">
<?php
$allTeams = $mysqli->query("SELECT * FROM teams ORDER BY name");
if ($allTeams) { 
  while($team = $allTeams->fetch_object())
  {
?>
<option value="<?= $team->ID ?>"><?= $team->name ?></option>


<?php } ?>
<?php } ?>
</select><br/>
<br>
<input type="text" placeholder="Datum" name="Date">
<br>
<input type="text" placeholder="Hemma Lag mål" name="HomeTeamScore">
<br>
<input type="text" placeholder="Borta Lag mål" name="RoadTeamScore">
<br>
<input type="text" placeholder="Hemma Lag poäng" name="HomeTeamPoints">
<br>
<input type="text" placeholder="Borta Lag poäng" name="RoadTeamPoints">
<br>
<br>
<input type="Checkbox" name="Overtime" value="Overtime">Övertid<br>
<br>
<br>
<input type="submit" value="skicka">
</form>

<br>
<br>






<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
</script>

<script src=" https://code.jquery.com/jquery-2.1.3.min.js"></script>
   
	
</body>
</html>