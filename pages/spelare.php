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

  <div class="content">

<!-- FAVORITER RESULTAT START -->

<?php include '../elements/LeftSidebar.php';?>

<!-- FAVORITER RESULTAT END-->

   <div class="news">
     <div class="newscontainer">
        <div class="tablebannerStats"></div>

        <div class="playerPageContainer">
          <div class="playerPicture"><img src="../images/w.jpg" class="pictureindiv"></div>

          <div class="playerPageInfo">
         
            
            <?php

               $test = mysql_real_escape_string($_REQUEST['url']);

            $results2 = $mysqli->query("SELECT ID FROM players WHERE URL = '$test'");
                        if ($results2) { 
              while($obj = $results2->fetch_object())
              {
                $player = $obj->ID;
              }
            }


            $results1 = $mysqli->query("SELECT t.URL , t.image FROM teams as t, rplayerteams as rpt, players as p WHERE rpt.player = $player AND rpt.team = t.ID");
                                if ($results1) { 
              if($obj = $results1->fetch_object())
              {
                echo'<a href="lag.php?URL='.$obj->URL.'"><img class="logoPlayerPage" src="../images/'.$obj->image.'"></a>';
              }
            }

        


            $test = mysql_real_escape_string($_REQUEST['url']);

            $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
          
            $results = $mysqli->query("SELECT * FROM players 
                                      WHERE URL = '$test'");
            if ($results) { 
              while($obj = $results->fetch_object())
              {
                echo '
                  <div class="playerTeamNumber">
                  <span style="position:relative; top:-0.5em; font-size:60%;">#</span>'.$obj->number.'
                  </div>
                  <div style="width:465px; background:; float:left; padding-top:10px;">
                  <h1 class="playerFirstName">'.$obj->surname.'</h1>
                  <div class="playerLastName">'.$obj->lastname.'</div>
                  <h1 class="playerFirstName">'.$obj->position.'</h1>
                </div>';
              }
            }
            ?>
          </div>
        </div>

        <?php
        $test = mysql_real_escape_string($_REQUEST['url']);

        $playerinfo = $mysqli->query("SELECT * FROM players WHERE URL = '$test'");
        if ($playerinfo) { 
          if($obj = $playerinfo->fetch_object()){

            $playerId = $obj->ID;
        

          }
        }


        $results3 = $mysqli->query("SELECT pt.gamesPlayed, pt.goals, pt.assists, pt.penaltyInMinutes, pt.tackles, pt.shotsOnGoal, pt.plusMinus, p.birthday, p.height, p.weight, p.shoots, p.drafted
                                    FROM playertable AS pt, players AS p 
                                    WHERE pt.playerId = $playerId");

        if ($results3) { 
          if($obj = $results3->fetch_object()){
          echo'<table class="playerStatsTable">
            <tr>
              <td class="playerPageStats" style="border-left:none;">GP</td>
              <td class="playerPageStats">M</td>
              <td class="playerPageStats">A</td>
              <td class="playerPageStats">Tacklingar</td>
              <td class="playerPageStats">+/-</td>
              <td class="playerPageStats" style="border-right:none;">UIM</td>
            </tr>
            <tr>
              <td class="playerPageStatsDos" style="border-left:none;">'.$obj->gamesPlayed.'</td>
              <td class="playerPageStatsDos">'.$obj->goals.'</td>
              <td class="playerPageStatsDos">'.$obj->assists.'</td>
              <td class="playerPageStatsDos">'.$obj->tackles.'</td>
              <td class="playerPageStatsDos">'.$obj->plusMinus.'</td>
              <td class="playerPageStatsDos" style="border-right:none;">'.$obj->penaltyInMinutes.'</td>
            </tr>
          </table>

          <div style="width:730px; height:6px; background-color:#0D243C; margin-top:10px; margin-bottom:10px;"></div>

          <table class="playerStatsTable">
            <tr>
              <td class="playerPageThreeRow">LÄNGD</td>
              <td class="playerPageThreeRow">VINKEL</td>
              <td class="playerPageThreeRow" style="border-right:none;">DRAFTAD</td>
            </tr>
            <tr class="boldandborder" >
              <td class="playerPageThreeRow">'.$obj->height.'</td>
              <td class="playerPageThreeRow">'.$obj->shoots.'</td>
              <td class="playerPageThreeRow" style="border-right:none;">'.$obj->drafted.'</td>
            </tr>
            <tr >
              <td class="playerPageThreeRow">VIKT</td>
              <td class="playerPageThreeRow">ÅLDER</td>
              <td class="playerPageThreeRow" style="border-right:none;">SÄSONGER</td>
            </tr>
            <tr style="font-weight:bold;">
              <td class="playerPageThreeRow">'.$obj->weight.'</td>
              <td class="playerPageThreeRow">26(1988-08-26)</td>
              <td class="playerPageThreeRow" style="border-right:none;"></td>
            </tr>
          </table>';
          }
        }
        ?>

        <div style="height:19px;"></div>


         <div class="tablebannerStats" style="display:block; margin-left:auto; margin-right:auto;"></div>
         <div style="height:45px;"></div>

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
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>