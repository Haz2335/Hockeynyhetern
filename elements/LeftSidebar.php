      <div class="leftsidebar-containter">
        <h5>Favoriter</h5>
          <div class="FrontLoginContainer">
            <h5 class="LeftSideBarHeading">Logga in på hockeynyheter för att se dina favorit lag</h5>
            <div class="FrontPageLoginB" onclick="location.href='../pages/login.php'"><h5 style="line-height:30px;">Log in</h5></div>
            <div class="FrontPageSignupB" onclick="location.href='../pages/register.php'"><h5 style="line-height:10px;">Sign up</h5></div>
          </div>

 <?php

  $results = $mysqli->query("SELECT t.shortName, t.url, t.image, xG.HomeTeamScore , xG.RoadTeamScore FROM teams as t , xgameinfo as xG Where xG.HomeTeamId = t.id ORDER BY xG.date DESC LIMIT 5");

  $results1 = $mysqli->query("SELECT t.shortName, t.url, t.image FROM teams as t , xgameinfo as xG Where xG.RoadTeamId = t.id ORDER BY xG.date DESC LIMIT 5");

    if ($results) { 

  echo '<h5>Resultat</h5>';


        while($obj = $results->fetch_object() and $obj1 = $results1 ->fetch_object())
  {

 echo '
          <table class="favorites">
            <tr>
              <td class="favoritefirstcol">
                <img class="favoriteimg" src="../images/'.$obj->image.'">
                '.$obj->shortName.'
              </td>
              <td class="favoritesecondcol"> '.$obj->HomeTeamScore.'';

                if ($obj->HomeTeamScore>$obj->RoadTeamScore) 
                {
                echo '<img class="arrow" src="../images/arrow.png">';
                }

              echo'
              </td>
            </tr>
            <tr>
              <td class="favoritefirstcol">
                  <img class="favoriteimg" src="../images/'.$obj1->image.'">
                '.$obj1->shortName.'
              </td>
              <td class="favoritesecondcol"> '.$obj->RoadTeamScore.'';

                if ($obj->HomeTeamScore<$obj->RoadTeamScore) 
                {
                echo '<img class="arrow" src="../images/arrow.png">';
                }


              echo'
              </td>
            </tr>
          </table>';
}
}
          ?>

          </center>
        </div>