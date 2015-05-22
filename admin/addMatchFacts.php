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
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Hockeysporten.se</title>

    <!-- Bootstrap -->
    <link href="../css/admin.css" rel="stylesheet">

  </head>
  <body class="AdminBg">

   <center> <h1 class="HeadingAdmin1">Lägg till Matchfakta</h1> </center>

<div class="AdminPageContainer">

<center>

<form method="post" action="insert/insertxGamesInfo.php">

<h2 class="InputHeading">Liga</h2>
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


<div class="SelectContainer">

<div class="SelectFloat">
<h2 class="InputHeading">Hemmalag</h2>
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
</select>
</div>

<div class="SelectFloat2">
<h2 class="InputHeading">Bortalag</h2>
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
</select>


</div>
</div>

<div class="SelectContainer">
  <div class="SelectFloat">
    <h2 class="InputHeading">Hemmalag antal mål</h2>
    <input type="text" placeholder="Hemmalag mål" name="HomeTeamScore">
  </div>
  <div class="SelectFloat2">
    <h2 class="InputHeading">Bortalag antal mål</h2>
    <input type="text" placeholder="Bortalag mål" name="RoadTeamScore">
  </div>
</div>

<div class="SelectContainer">
  <div class="SelectFloat">
    <h2 class="InputHeading">Hemmalag poäng</h2>
    <input type="text" placeholder="Hemmalag poäng" name="HomeTeamPoints">
  </div>
  <div class="SelectFloat2">
    <h2 class="InputHeading">Bortalag poäng</h2>
    <input type="text" placeholder="Bortalag poäng" name="RoadTeamPoints">
  </div>
</div>

    <h2 class="InputHeading">Matchdatum</h2>
    <input type="text" placeholder="Datum" name="Date">
    <h2 class="InputHeading">Övertid</h2>
    <input type="Checkbox" name="Overtime" value="Overtime">

<br>
<br>
<input class="AdminSubmit" type="submit" value="skicka">
</form>


<form action="adminFrontPage.php">
<input type="submit" class="AdminSubmit" value="Gå tillbaka">
</form>
</center>



</div> <!-- END ADMINPAGECONTAINER-->

<script src=" https://code.jquery.com/jquery-2.1.3.min.js"></script>

  </body>
</html>