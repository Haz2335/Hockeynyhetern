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

      <!-- FAVORITER RESULTAT START -->

      <?php include '../elements/LeftSidebar.php';?>

      <!-- FAVORITER RESULTAT END-->

  	<div class="content">
  	<div class="news"> <!--News1 start-->

<div class="slidecontainer">

  <?php
  /* $test = basename($_SERVER['PHP_SELF']);


    $test1 = str_replace(".php","","$test");*/

       $articleUrl = mysql_real_escape_string($_REQUEST['url']);

    //current URL of the Page. cart_update.php redirects back to this URL
        $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);


        $counter = $mysqli->query("UPDATE article SET counter = (counter+1) WHERE articleUrl = '$articleUrl'");

        
       $results = $mysqli->query("SELECT * FROM `article` WHERE articleUrl = '$articleUrl'");

        if ($results) { 
        $number = "0";
              //fetch results set as object and output HTML
              while($obj = $results->fetch_object())
        {

     echo '<img style="width:730px;" src="../images/'.$obj->imageName.'" />';

echo '</div>

        <div class="newscontainer">';

         echo '<h3>'.utf8_encode($obj->heading).'</h3>';
          echo '<p>Skrivet av Martin Ericsson inom Hockey, NHL, Ottawa Senators, Daniel Alfredsson den 5 Dec 2014 kl 08:18</p>
          <hr></hr>';

          /*echo '<div class="subarticle">
          <strong><p>Daniel Alfredsson tackades av i Ottawa i natt, och det blev känslosamt för många. Han spenderade 17 säsonger i klubben och jublet visste inga gränser när han återigen beträdde isen i arenan.
          – Tack så enormt mycket, sa Alfredsson under sitt tal.</p></strong>
          </div>';*/



         echo' <div class="taggzon">
            <ul class="tagglist">
              <li>Bobrovsky satte klubbrekord</li>
              <li>Bobrovsky satte klubbrekord</li>
              <li>Bobrovsky satte klubbrekord</li>
              <li>Bobrovsky satte klubbrekord</li>
            </ul>
          </div>';

          echo '
          <p class="articletext" >'.utf8_encode($obj->articleText).'</p>
   
<p>Dela med dig av "'.utf8_encode($obj->heading).'" till dina vänner:</p>';
}
}

?>

<h4>Like knappar</h4>

<div class="skribent">

  <img class="profilbild" src="../images/martin.jpg">

  <div class="skribentinfo">
    <p class="namn">Martin Eriksson</p>
    <p class="titel">Chefsredaktör</p>
    <hr class="line">
    <p class="mer">Läs mer av Martin Ericsson     Maila Martin Ericsson     mareri85</p>
  </div>

</div><!-- End skribent -->

<div class="comments">


</div><!-- END COMMENT-->

</div><!-- End newscontainer 1 -->

<br>


<div class="news"> <!--News2 start-->
<div class="newscontainer">
    <h2>NHL-nyheter</h2>

<?php

    //current URL of the Page. cart_update.php redirects back to this URL
        $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
          
        $results = $mysqli->query("SELECT `thumbnail`,`heading`,`summary`,`articleUrl` FROM `article` ORDER BY id ASC");
        if ($results) { 
        $number = "0";
              //fetch results set as object and output HTML
              while($obj = $results->fetch_object())
        {
          //Article thumbnails


      echo '<a style="color:black;" href="mall.php?url='.$obj->articleUrl.'">'; 
        //echo '<a style="color:black;" href="artikel.php">'; 
        echo '<div class="rows">';
         echo '<img style="width:223px;" src="../images/'.$obj->thumbnail.'">';
          echo '<div style="width:223px;">';
           echo ' <h3>'.utf8_encode($obj->heading).'</h3> ';
          echo '  <p>'.utf8_encode($obj->summary).'</p>';
         echo ' </div>';
       echo ' </div>';
       echo '</a>';

        $number++;

        if ($number == "3") {
        $number = "0";
          echo '<div style="height:5px; width:100%; background:; float:left;"></div>';
        }

      } 

    }
      ?>

       

        <img class="newsbanner" src="../images/banner.gif">

  

      </div><!--/end newscontainer 2-->
      </div><!--/end news2  not needed?-->
  		</div><!--/end news1 -->

<!-- START SIDEBAR-->
<?php include '../elements/LatestResults.php'; ?>
<!-- END SIDEBAR-->

</div>
<!-- END CONTENT-CONTAINER-->


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