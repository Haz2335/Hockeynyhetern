<!DOCTYPE html>
<?php

session_start();
include_once("config.php");
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="ckeditor/ckeditor.js"></script>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Hockeysporten.se</title>

    <!-- Bootstrap -->
    <link href="../css/admin.css" rel="stylesheet">

  </head>
  <body class="AdminBg">


   <center> <h1 class="HeadingAdmin">Välkommen till Hockeynyheters adminpage</h1> </center>

<center>
 
  <div class="ButtomContainer">
  <h2 class="ButtonHeading">Läggtill</h2>
   <a href="" class="AdminButtom">Lägg till Spelare</a>
   <a href="" class="AdminButtom">Lägg till Lag</a>
   <a href="" class="AdminButtom">Lägg till Ligor eller grupper</a>
   <a href="addArticle.php" class="AdminButtom">Lägg till artikel</a>
   <a href="" class="AdminButtom">Lägg till banner</a>
   <a href="" class="AdminButtom">Kommande matcher</a>
   <a href="addMatchFacts.php" class="AdminButtom">Matchfakta</a>
  </div>
  

  <!--
  <div class="ButtomContainer">
   <h2 class="ButtonHeading">Ändra</h2>
   <a href="" class="AdminButtomOrange">Ändra Spelare</a>
   <a href="" class="AdminButtomOrange">Ändra Lag</a>
   <a href="" class="AdminButtomOrange">Ändra Ligor eller grupper</a>
   <a href="addArticle.php" class="AdminButtomOrange">Ändra artikel</a>
   <a href="" class="AdminButtomOrange">Ändra banner</a>
   <a href="" class="AdminButtomOrange">Ändra Kommande matcher</a>
   <a href="addMatchFacts.php" class="AdminButtomOrange">Ändra Matchfakta</a>
  </div>
 
   <div class="ButtomContainer">
   <h2 class="ButtonHeading">Tabort</h2>
   <a href="" class="AdminButtomRed">Tabort Spelare</a>
   <a href="" class="AdminButtomRed">Tabort Lag</a>
   <a href="" class="AdminButtomRed">Tabort Ligor eller grupper</a>
   <a href="addArticle.php" class="AdminButtomRed">Tabort artikel</a>
   <a href="" class="AdminButtomRed">Tabort banner</a>
   <a href="" class="AdminButtomRed">Tabort Kommande matcher</a>
   <a href="addMatchFacts.php" class="AdminButtomRed">Tabort Matchfakta</a>
  </div>

  -->

</center>




  </body>
</html>