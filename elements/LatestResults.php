<div class="sidebar">

  <center>

       <div class="senaste">
        <h3 class="sidebar-heading">Mest lästa</h3>
          <table>


            <?php 

            $mostRead = $mysqli->query("SELECT `thumbnail`,`heading`,`articleUrl` FROM `article` ORDER BY `counter`DESC LIMIT 4");
        if ($mostRead) { 
        $mostreadnumber= "0";
              //fetch results set as object and output HTML
              while($obj = $mostRead->fetch_object())
        {
          //Article thumbnails

            $mostreadnumber++;

            if ($mostreadnumber % 2 != 0) {
            echo '<tr class="mostread1" onclick="location.href="artiklar/mall.php?url='.$obj->articleUrl.'"">
              
              <td style="width:251px;">
               <a href="artiklar/mall.php?url='.$obj->articleUrl.'"><h4 class="mostreadtitle">'.utf8_encode($obj->heading).'</h4></a>
              </td>
               <td>
                <img class="mostreadimg" src="../images/'.$obj->thumbnail.'">
              </td>

            </tr>';
          }


            else if ($mostreadnumber % 2 == 0)  {

            

           echo' <tr class="mostread" onclick="location.href="artiklar/mall.php?url='.$obj->articleUrl.'">
               <td style="width:251px;">
                <a href="artiklar/mall.php?url='.$obj->articleUrl.'"><h4 class="mostreadtitle">'.utf8_encode($obj->heading).'</h4></a>
              </td>
              <td>
                <img class="mostreadimg" src="../images/'.$obj->thumbnail.'">
              </td>
            </tr>';
          }
        }
      }
  ?>
       </table>
        </div>

          

            <!---<tr class="mostread1" onclick="location.href='resultat.php'">
              <td style="width:251px;">
                <h4 class="mostreadtitle">Läck bommade igen kassen</h4>
              </td>
               <td>
                <img class="mostreadimg" src="images/thumbnail.jpg">
              </td>
            </tr>

             <tr class="mostread" onclick="location.href='resultat.php'">
              <td style="width:251px;">
                <h4 class="mostreadtitle">Läck bommade igen kassen</h4>
              </td>
               <td>
                <img class="mostreadimg" src="images/thumbnail.jpg">
              </td>
            </tr>-->


      
<!--
        <div class="senaste">
              <h3 class="sidebar-heading">Mest lästa</h3>

        <a href="">
          <div class="mostread1">
        <div class="float-left">
           <h4 class="mostreadtitle">Bobrovsky satte klubbrekord satte klubbrek</h4>
        </div>

        <div class="float-right">
            <img class="mostreadimg" src="images/thumbnail.jpg">
        </div>
     

      </div>
    </a>

    <a href="">
        <div class="mostread">
        <div class="float-left">
           <h4 class="mostreadtitle">Brodeur föll i debuten</h4>
        </div>
    

        <div class="float-right">
            <img class="mostreadimg" src="images/thumbnail1.jpg">
        </div>

      </div>
    </a>

         <a href="">
          <div class="mostread1">
        <div class="float-left">
           <h4 class="mostreadtitle">Läck bommade igen kassen</h4>
        </div>

        <div class="float-right">
            <img class="mostreadimg" src="images/thumbnail.jpg">
        </div>

      </div>
     </a>

    
       <a href=""> 
        <div class="mostread">
        <div class="float-left">
           <h4 class="mostreadtitle">Philadelphia Flyers</h4>
        </div>

        <div class="float-right">
            <img class="mostreadimg" src="images/thumbnail1.jpg">
        </div>

        </div>
      </a>

      
              



    </div>-->
</center>




<div class="sidebanner"><img src="../images/banner.jpg"></div>

<!-- MATCH SCHEMA SIDEBAR START-->
<center>

<div class="senasteContainter">

<table class="senasteTable">
  
  <tr style="height:30px; ">
    <td></td>
    <td><h3 class="sidebar-heading">Spelschema</h3></td>
    <td></td>
  </tr>


<?php 

       $upcomingHome = $mysqli->query("SELECT t.name, t.url, t.image, gS.GameDate FROM `gameschedule` as gS , `teams` as t Where gS.HomeTeamId = t.id ORDER BY `GameDate`LIMIT 4");

       $upcomingRoad = $mysqli->query("SELECT t.name, t.url, t.image FROM `gameschedule` as gS , `teams` as t Where gS.RoadTeamId = t.id ORDER BY `GameDate` LIMIT 4");


        if ($upcomingHome) { 
        $upcomingNumber= "0";
              //fetch results set as object and output HTML
          while($obj = $upcomingHome->fetch_object() and $obj1 = $upcomingRoad ->fetch_object())
  

    {
      $upcomingNumber++;
      if ($upcomingNumber % 2 != 0) {


  echo 
  '<tr class="senasteRow">
    <td style="width:150px;"><img class="teamlogo1" src="../images/'.$obj->image.'"><br>
      <a href="'.$obj->url.'"><div class="senasteTeamName">'.$obj->name.'</div></a></td>
       <td class="SenasteMidTd" style="width:80px;">VS<br><span class="spelschema-date">'.$obj->GameDate.'</span></td>
        <td style="width:150px;"><img class="teamlogo1" src="../images/'.$obj1->image.'"><br>
      <a href="'.$obj1->url.'"><div class="senasteTeamName">'.$obj1->name.'</a></div></td>
  </tr>';
  }

  else if ($upcomingNumber % 2 == 0)  {

  echo
  '<tr class="senasteRow1">
    <td style="width:110px;"><img class="teamlogo1" src="../images/'.$obj->image.'"><br>
      <a href="'.$obj->url.'"><div class="senasteTeamName">'.$obj->name.'</div></a></td>
    <td class="SenasteMidTd" style="width:80px;">VS<br><span class="spelschema-date">'.$obj->GameDate.'</span></td>
    <td style="width:110px;"><img class="teamlogo1" src="../images/'.$obj1->image.'"><br>
      <a href="'.$obj1->url.'"><div class="senasteTeamName">'.$obj1->name.'</div></a></td>
  </tr>';

}
}
}

?>

<!-- MATCH SCHEMA END-->

</table>
</div>

</center>

<br>


<center>

<div class="senasteContainter">
<table class="senasteTable">

  <tr style="height:30px; ">
    <td></td>
    <td><h3 class="sidebar-heading">Resultat</h3></td>
    <td></td>
  </tr>

<?php

      $results = $mysqli->query("SELECT t.name, t.url, t.image, xG.HomeTeamScore , xG.RoadTeamScore FROM teams as t , xgameinfo as xG Where xG.HomeTeamId = t.id ORDER BY xG.date DESC LIMIT 4");

  $results1 = $mysqli->query("SELECT t.name, t.url, t.image FROM teams as t , xgameinfo as xG Where xG.RoadTeamId = t.id ORDER BY xG.date DESC LIMIT 4");

    if ($results) { 

      $numberTwo = "0";

        while($obj = $results->fetch_object() and $obj1 = $results1 ->fetch_object())
  {
      $numberTwo++;
      if ($numberTwo % 2 != 0) {



  echo '
  <tr class="senasteRow">
    <td style="width:150px;"><img class="teamlogo1" src="../images/'.$obj->image.'"><br>
      <a href="'.$obj->url.'"><div class="senasteTeamName">'.$obj->name.'</div></a>
    </td>
       
       <td class="SenasteMidTd">'.$obj->HomeTeamScore.'-'.$obj->RoadTeamScore.'</td>
        
    <td style="width:150px;"><img class="teamlogo1" src="../images/'.$obj1->image.'"><br>
      <a href="'.$obj1->url.'"><div class="senasteTeamName">'.$obj1->name.'</div></a>
    </td>
  </tr>';
}

else if ($numberTwo % 2 == 0)  {
  
  echo'
  <tr class="senasteRow1">
    
    <td style="width:110px;"><img class="teamlogo1" src="../images/'.$obj->image.'"><br>
      <a href="'.$obj->url.'"><div class="senasteTeamName">'.$obj->name.'</div></a>
    </td>

    <td class="SenasteMidTd">'.$obj->HomeTeamScore.'-'.$obj->RoadTeamScore.'</td>
    
    <td style="width:110px;"><img class="teamlogo1" src="../images/'.$obj1->image.'"><br>
      <a href="'.$obj1->url.'"><div class="senasteTeamName">'.$obj1->name.'</div></a>
    </td>
  </tr>';
}
}
}

?>

</table>
</div>

</center>







<div class="sidebanner"><img src="../images/banner.jpg"></div>

</div> 