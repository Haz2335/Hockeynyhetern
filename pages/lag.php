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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="../js/jquery.flexslider.js"></script>
    <?php include '../js/jquery.tabs.js';?>

  </head>
<body>
    <!-- START HEADER-->

   <?php include '../elements/header.php';?>
    
    <!-- END HEADER-->

  <div class="content">

  <!-- FAVORITER RESULTAT START -->

  <?php include '../elements/LeftSidebar.php';?>

  <!-- FAVORITER RESULTAT END-->

     
   <div class="news">
     <div class="newscontainer">
        <div class="teamContainer">
        <?php
            $test = mysql_real_escape_string($_REQUEST['URL']);

            $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
          
            $results = $mysqli->query("SELECT * FROM teams WHERE URL = '$test'");
            if ($results) { 
              while($obj = $results->fetch_object())
              {
                echo'<img class="logolagsida" src="../images/'.$obj->image.'"></img>
                <div class="teamPageInfo">
                  <h1 class="teamName">'.$obj->name.'</h1>
                  <h1 class="teamName">'.$obj->shortName.'</h1>
                  <h1 class="teamStatText">EASTERN CONFERENCE | METROPOLITAN DIVISION</h1>  
                  <h1 class="teamStatText">8TH PLACE | 43-27-12, 98 POINTS</h1>        
                </div>
                <div class="teamStatRow">
                <table class="TeamTableOne">
                <tr>
                <td class="InfoBoxText">GOALS PER GAME</td>
                <td class="InfoBoxText">GOALS AGAINST</td>
                <td class="InfoBoxText">POWER PLAY PCT</td>
                </tr>
                <tr>
                <td class="InfoBoxTextTwo">
                24<span style="position:relative; top:-0.5em; font-size:60%;">TH</span></td>

                <td class="InfoBoxTextTwo"> 
                24<span style="position:relative; top:-0.5em; font-size:60%;">TH</span></td>

                <td class="InfoBoxTextTwo">
                24<span style="position:relative; top:-0.5em; font-size:60%;">TH</span></td>
                </tr>
                <tr>
                <td class="InfoBoxTextThree">12</td>
                <td class="InfoBoxTextThree">1</td>
                <td class="InfoBoxTextThree">8</td>
                </tr> 
                </table>';
              }
          }
          ?>

          </div>
          </div>
          <div class="tablebannerStats"></div>
          <div style="height:14px;"></div>
          <ul class='tabs'>
            <li><a href='#tab1'>Tabell</a></li>
            <li><a href='#tab2'>Spelare</a></li>
          </ul>

          <div id='tab1'>

          <?php

            //$results = $mysqli->query("SELECT t.name, t.url, FROM teams AS t AND * FROM teamTable WHERE lagId = t.id ORDER BY totalPoints DESC");
            $results = $mysqli->query("SELECT t.name, t.URL, tt.id, tt.lagId, tt.gamesPlayed, tt.wins, tt.overtimeWins, tt.overtimeLosses, tt.losses, tt.goals,tt.goalsAgainst, tt.totalPoints FROM teams AS t, teamtable as tt WHERE lagId = t.ID ORDER BY totalPoints DESC");


            if ($results) { 

              $numberTwo = "0";

            echo '<table width="730px" style="display:block; margin-left:auto; margin-right:auto;">
            <tr class="titlerow">
            <td class="backrow"></td>
            <td class="teamrow">TEAM</td>
            <td class="statrows">M</td>
            <td class="statrows">V</td>
            <td class="statrows">ÖTV</td>
            <td class="statrows">ÖTF</td>
            <td class="statrows">F</td>
            <td class="statrows">MS</td>
            <td class="statrows">POÄNG</td>
            </tr>';

            while($obj = $results->fetch_object())
            {
            $numberTwo++;
            if ($numberTwo % 2 != 0) {

            echo'<tr style="background-color: #F7F7F7" height="40px">
            <td class="backrow">'.$numberTwo.'</td>
            <td width="180px"class="teamrow"><a href="lag.php?URL='.$obj->URL.'">'.$obj->name.'</td>
            <td class="statrows">'.$obj->gamesPlayed.'</td>
            <td class="statrows">'.$obj->wins.'</td>
            <td class="statrows">'.$obj->overtimeWins.'</td>
            <td class="statrows">'.$obj->overtimeLosses.'</td>
            <td class="statrows">'.$obj->losses.'</td>
            <td class="statrows">'.$obj->goals.'-'.$obj->goalsAgainst.'</td>
            <td class="statrows">'.$obj->totalPoints.'</td>
            </tr>';
          }

          else if ($numberTwo % 2 == 0){

            echo'<tr style="background-color: #FFFFFF" height="40px">
            <td class="backrow">'.$numberTwo.'</td>
            <td width="180px"class="teamrow"><a href="lag.php?URL='.$obj->URL.'">'.$obj->name.'</td>
            <td class="statrows">'.$obj->gamesPlayed.'</td>
            <td class="statrows">'.$obj->wins.'</td>
            <td class="statrows">'.$obj->overtimeWins.'</td>
            <td class="statrows">'.$obj->overtimeLosses.'</td>
            <td class="statrows">'.$obj->losses.'</td>
            <td class="statrows">'.$obj->goals.'-'.$obj->goalsAgainst.'</td>
            <td class="statrows">'.$obj->totalPoints.'</td>
            </tr>';
          }}}
          echo'</table>';
          ?>
          
          <div style="height:45px;"></div>
          </div>
          

          <div id='tab2'>
          <?php
            $test = mysql_real_escape_string($_REQUEST['URL']);
            //$results = $mysqli->query("SELECT t.name, t.url, FROM teams AS t AND * FROM teamTable WHERE lagId = t.id ORDER BY totalPoints DESC");
            $results = $mysqli->query("SELECT p.surname, p.lastname, p.number, p.URL FROM players as p, rplayerteams as rpt, teams as t Where t.URL ='$test' and rpt.player = p.ID and rpt.team = t.ID ORDER BY p.number");


            if ($results) { 

              $numberTwo = "0";
              echo '<table width="730px" style="display:block; margin-left:auto; margin-right:auto;">
              <tr class="titlerow">
              <td class="statrow">NR</td>
              <td class="teamrow">SPELARE</td>
              <td class="statrows"></td>
              <td class="statrows"></td>
              <td class="statrows"></td>
              <td class="statrows"></td>
              <td class="statrows"></td>
              <td class="statrows"></td>
              <td class="statrows"></td>
              </tr>';

            while($obj = $results->fetch_object())
            {
            $numberTwo++;
            if ($numberTwo % 2 != 0) {

              echo'<tr style="background-color: #F7F7F7" height="40px">
              <td class="statrow">'.$obj->number.'</td>
              <td width="180px"class="teamrow"><a href="spelare.php?url='.$obj->URL.'">'.$obj->surname.' '.$obj->lastname.'</a></td>
              <td class="statrows"></td>
              <td class="statrows"></td>
              <td class="statrows"></td>
              <td class="statrows"></td>
              <td class="statrows"></td>
              <td class="statrows"></td>
              <td class="statrows"></td>
              </tr>';
            }
            else if ($numberTwo % 2 == 0){

              echo'<tr style="background-color: #FFFFFF" height="40px">
              <td class="statrow">'.$obj->number.'</td>
              <td width="180px"class="teamrow"><a href="spelare.php?url='.$obj->URL.'">'.$obj->surname.' '.$obj->lastname.'</a></td>
              <td class="statrows"></td>
              <td class="statrows"></td>
              <td class="statrows"></td>
              <td class="statrows"></td>
              <td class="statrows"></td>
              <td class="statrows"></td>
              <td class="statrows"></td>
              </tr>';
            }}}
          echo'</table>';
          ?>

          </div>
          
          <img class="newsbanner" src="../images/banner.gif"></img>
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