<!DOCTYPE html>
<?php

session_start();
include_once("../config.php");
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="../ckeditor/ckeditor.js"></script>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Hockeysporten.se</title>

    <!-- Bootstrap -->
    <link href="../css/admin.css" rel="stylesheet">

  </head>
  <body class="AdminBg">


   <center> <h1 class="HeadingAdmin1">Lägg till artikel</h1> </center>

<div class="AdminPageContainer">

<center>

<form method="post" action="insert/insertarticle.php">
<h2 class="InputHeading">Rubrik</h2>
<input type="text" placeholder="rubrik" name="heading">
<br>
<h2 class="InputHeading">Artikel Url</h2>
<input type="text" placeholder="url" name="articleUrl">
<br>
<h2 class="InputHeading">Artikel Bild</h2>
<input type="text" placeholder="image" name="image">
<br>
<h2 class="InputHeading">Thumbnail</h2>
<input type="text" placeholder="thumbnail" name="thumbnail">
<br>
<h2 class="InputHeading">Bildtext</h2>
<input type="text" placeholder="imagetext" name="imagetext">
<br>
<br>
<div style="width:700px;">
<h2 class="InputHeading">Artikel Text</h2>
<textarea name="editor1" id="editor1" rows="10" cols="80">
                This is my textarea to be replaced with CKEditor.
</textarea>
</div>
<br>
<br>
<h2 class="InputHeading">Sammanfattning</h2>
<input type="text" placeholder="sammanfattning" name="summary">
<br>
<h2 class="InputHeading">Artikel Prioritet (1-4)</h2>
<input type="text" placeholder="prioritering" name="priority">
<br>
<input type="hidden" name="date" value= <?php echo date("Y-m-d/h:i:s");?>>
<br>
<br>
<h2 class="InputHeading">Taggar</h2>
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



<input class="AdminSubmit" type="submit" value="skicka">
</form>

<form action="adminFrontPage.php">
<input type="submit" class="AdminSubmit" value="Gå tillbaka">
</form>
</center>



</div> <!-- END ADMINPAGECONTAINER-->

<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
</script>

<script src=" https://code.jquery.com/jquery-2.1.3.min.js"></script>

  </body>
</html>