<!DOCTYPE html>
<?php

session_start();
include_once("../config/config.php");
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Hockeynyheter.se</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/hockey.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<script src="../js/bootstrap.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="../css/flexslider.css" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="../js/jquery.flexslider.js"></script>


  </head>
  <body>

    <!-- START HEADER-->

   <?php include '../elements/header.php';?>
    
    <!-- END HEADER-->

<div class="senasteslide">
</div>

    <div class="content">

<!-- FAVORITER RESULTAT START -->

<?php include '../elements/LeftSidebar.php';?>

<!-- FAVORITER RESULTAT END-->


      <div class="news"> 
        <div class="newscontainer">
          <img class="newsbanner" src="images/banner.gif"></img>
          <div class="tablebannerStats" style="display:block; margin-left:auto; margin-right:auto;"></div>
          <table width="730px" height="50px" style="display:block; margin-left:auto; margin-right:auto;">
          <tr class="titlerow">
          <td class="playerseason">Säsong</td>
          <td class="teamrow">Spelare</td>
          <td class="playerstatrows">Matcher</td>
          <td class="playerstatrows">Mål</td>
          <td class="playerstatrows">Assists</td>
          <td class="playerstatrows">Poäng</td>
          <td class="playerstatrows">Lag</td>
          </tr>
          <tr style="background-color: #F7F7F7" height="40px">
          <td class="playerseason">2014-2015</td>
          <td width="180px"class="teamrow">NY RANGERS</td>
          <td class="playerstatrows">82</td>
          <td class="playerstatrows">53</td>
          <td class="playerstatrows">0</td>
          <td class="playerstatrows">0</td>
          <td class="playerstatrows">22</td>

          </tr>
          <tr style="background-color: #FFFFFF" height="40px">
          <td class="playerseason">2014-2015</td>
          <td width="180px"class="teamrow">NY RANGERS</td>
          <td class="playerstatrows">82</td>
          <td class="playerstatrows">53</td>
          <td class="playerstatrows">0</td>
          <td class="playerstatrows">0</td>
          <td class="playerstatrows">22</td>
          </tr>
          <tr style="background-color: #F7F7F7" height="40px">
          <td class="playerseason">2014-2015</td>
          <td width="180px"class="teamrow">NY RANGERS</td>
          <td class="playerstatrows">82</td>
          <td class="playerstatrows">53</td>
          <td class="playerstatrows">0</td>
          <td class="playerstatrows">0</td>
          <td class="playerstatrows">22</td>
          </tr>
          </table>
    
      </div>
      </div>



<!-- START SIDEBAR-->
<?php include '../elements/LatestResults.php'; ?>
<!-- END SIDEBAR-->

</div>

    <!-- START FOOTER-->
<?php include '../elements/footer.php'; ?>
<!-- END FOOTER-->
  


    <script type="text/javascript" charset="utf-8">
    $(window).load(function() {
      $('.flexslider').flexslider();
    });
    </script>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>