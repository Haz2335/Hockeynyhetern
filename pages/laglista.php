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

<div class="news"> <!--News start-->
<div class="newscontainer"> <!--News container-->

  <!-- LAG START -->
  <h3> NHL lag </h3>

   <?php
   $test = mysql_real_escape_string($_REQUEST['url']);

    $current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    
  $results = $mysqli->query("SELECT t.name, t.url, t.image FROM leagues as l, rteamsleagues as rtl, teams as t Where l.name ='$test' and rtl.team = t.id and rtl.team = t.id and rtl.league = l.id ORDER BY t.name");

    if ($results) { 

      $number = "0";
        while($obj = $results->fetch_object())
  {
    $number++;

    if ($number % 2 != 0)  {
 
    echo '<div class="lagdiv">';
      echo '<img class="logolagsida" src="../images/'.$obj->image.'">';
      echo '<a href="lag.php?URL='.$obj->url.'">'.$obj->name.'</a>';
    echo '</div>'; 

    }
    else if ($number % 2 == 0)
    {

    echo '<div class="lagdiv1">';
      echo '<img class="logolagsida" src="../images/'.$obj->image.'">';
      echo '<a href="lag.php?URL='.$obj->url.'">'.$obj->name.'</a>';
    echo '</div>'; 
    
 
    }

}
}
?>

  <!-- /Lag end -->

        
</div> <!--/News container end-->
</div> <!--/News end-->


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