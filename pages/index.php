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
      
      <!-- START CONTENT-CONTAINER)-->
  	<div class="content"> 

<!-- FAVORITER RESULTAT START -->

<?php include '../elements/LeftSidebar.php';?>

<!-- FAVORITER RESULTAT END-->


      <!-- START NEWS-->
      <div class="news"> 

<div class="slidecontainer">
<div class="flexslider">
  <ul class="slides">
    <?php
    $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    
  $results = $mysqli->query("SELECT `imageName`,`articleUrl`,`heading` FROM `article` WHERE `priority`<= '3' ORDER BY `priority`, `date` DESC  LIMIT 5");
    if ($results) { 

      
        while($obj = $results->fetch_object())
  {
    echo '<li>';
    echo '<a href="../artiklar/artiklar.php?url='.$obj->articleUrl.'">';
      echo '<img src="../images/'.$obj->imageName.'" />';
      echo '<p class="flex-caption">'.utf8_encode($obj->heading).'</p>';
    echo '</a>'; 
    echo '</li>';

  }

   

}
    ?>
  </ul>
</div> 
</div>

        <!-- START NEWSAREA (THUMBNAILS...)-->
        <div class="newscontainer">

        
          <img class="newsbanner" src="../images/banner.gif"> <!-- REKLAMBANNER-->

      <?php

    //current URL of the Page. cart_update.php redirects back to this URL
        $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
          
        $results = $mysqli->query("SELECT `thumbnail`,`heading`,`summary`,`articleUrl`,`date` FROM `article` ORDER BY `date` DESC  LIMIT 12");
        if ($results) { 
        $number = "0";
              //fetch results set as object and output HTML
              while($obj = $results->fetch_object())
        {

          //Article thumbnails      
      echo '<a style="color:black;" href="../artiklar/artiklar.php?url='.$obj->articleUrl.'">'; 
        //echo '<a style="color:black;" href="artikel.php">'; 
        echo '<div class="rows">';
         echo '<img width="223px" src="../images/'.$obj->thumbnail.'">';
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



      </div>
      <!-- END NEWSCONTIANER-->
  		</div>
      <!-- END NEWS-->


<!-- START SIDEBAR-->
<?php include '../elements/LatestResults.php'; ?>
<!-- END SIDEBAR-->


</div> 
<!-- END CONTENTCONTAINER-->


<!-- START FOOTER-->
<?php include '../elements/footer.php'; ?>
<!-- END FOOTER-->
  


    <script type="text/javascript" charset="utf-8">
    $(window).load(function() {
      $('.flexslider').flexslider();
    });
    </script>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--  -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->

   
  </body>
</html>