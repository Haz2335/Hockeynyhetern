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

        <!-- START NEWSAREA (THUMBNAILS...)-->
        <div class="newscontainer">

    <!--      <div class="resultcontainer">

            <center>
            <div class="float-left" style="background:black; width:30%; height:100px;">
              <img style="width:45px; margin-top:15px;" src="images/blues.png">
            </div>
              <div class="float-left" style="background:green; width:40%; height:fill;">
                <h2>0-2</h2>
                <h4>0-1</h4>
                <h4>0-1</h4>
                <h4>0-1</h4>
              </div>
            <div class="float-left" style="background:pink; width:30%; height:100px;">
              <img style="width:45px; margin-top:15px;" src="images/blues.png">
            </div>
          </center>

          </div>-->

<table style="width:100%; background:; border:1px solid #DBDBDB; border-bottom:0px; ">

    <tr>

    <td style="width:23.5%; text-align:center; color:#0C7298; font-weight:bold; font-size:13px; line-height:25px;">

    </td>

   <td style="width:23%; text-align:center; color:#0C7298; font-weight:bold; font-size:13px; font-family: expresswayregular; ">
          <img style="width:75px; margin-top:17px;" src="../images/blues.png">
      <p style="margin-top:6px; margin-bottom:14px;">St.lois Blues</p>
      
    </td>

    <td style="width:7%; text-align:center;  ">
      <h2 style="margin-top:-6px; font-size:25px;">1-3</h2>
    </td>

    <td style="width:23%; text-align:center; color:#0C7298; font-weight:bold; font-size:13px; font-family: expresswayregular; ">
                <img style="width:75px; margin-top:17px;" src="../images/calgary.png">
      <p style="margin-top:6px; margin-bottom:14px;">Calgary flames</p>
    </td>

    <td style="width:23.5%; text-align:center; color:#0C7298; font-weight:bold; font-size:13px; line-height:25px;">

    </td>

  </tr>
</table>

  <table style="width:100%; background:; margin-bottom:20px; border:1px solid #DBDBDB; border-top:0px; ">

  <tr>
      <td style="width:10%;">
      </td>
    <td style="width:22.5%; text-align:center;">
    </td>

   <td style="width:14%; text-align:center;">
      
    </td>

<td style="width:7%; text-align:center; color:#7C7C7C;">
      <h3 style="margin-top:-20px;">1-3</h3>
    </td>

    <td style="width:14%; text-align:center; font-size:11px; color:#7C7C7C; text-align:left;">
      <p>1' Reilly Smith
Patrice Bergeron
Brad Marchand</p>
    </td>

    <td style="width:22.5%; text-align:center;">
    </td>
   <td style="width:10%;">
      </td>
  </tr>


  <tr>
      <td style="width:10%;">
      </td>
    <td style="width:22.5%; text-align:center;">
    </td>

    <td style="width:14%; text-align:center; font-size:11px; color:#7C7C7C; text-align:right;">

    </td>

<td style="width:7%; text-align:center; color:#7C7C7C;">
      <h3 style="margin-top:-20px;">1-2</h3>
    </td>

    <td style="width:14%; text-align:center; font-size:11px; text-align:left; color:#7C7C7C;">
      <p>21' Tommy Wingels Marc-Edouard Vlasic Patrick Marleau</p>
    </td>

    <td style="width:22.5%; text-align:center;">
    </td>
   <td style="width:10%;">
      </td>
  </tr>

    <tr>
      <td style="width:10%;">
      </td>
    <td style="width:22.5%; text-align:center;">
    </td>

    <td style="width:14%; text-align:center; font-size:11px; color:#7C7C7C; text-align:right;">
      <p>1' Reilly Smith
Patrice Bergeron
Brad Marchand</p>
    </td>

<td style="width:7%; text-align:center; color:#7C7C7C;">
      <h3 style="margin-top:-20px;">1-1</h3>
    </td>

    <td style="width:14%; text-align:center; font-size:12px;">

    </td>

    <td style="width:22.5%; text-align:center;">
    </td>
   <td style="width:10%;">
      </td>
  </tr>

    <tr>
      <td style="width:10%;">
      </td>
    <td style="width:22.5%; text-align:center;">
    </td>

    <td style="width:14%; text-align:center; font-size:11px; color:#7C7C7C; text-align:right;">

    </td>

<td style="width:7%; text-align:center; color:#7C7C7C;">
      <h3 style="margin-top:-20px;">0-1</h3>
    </td>

    <td style="width:14%; text-align:center; font-size:11px; text-align:left; color:#7C7C7C;">
      <p>34' Matt Duchene
Ryan O'Reilly</p>
    </td>

    <td style="width:22.5%; text-align:center;">
    </td>
   <td style="width:10%;">
      </td>
  </tr>

    
  
</table>






<table style="width:100%; background:; border:1px solid #DBDBDB; border-bottom:0px; ">

    <tr>

    <td style="width:23.5%; text-align:center; color:#0C7298; font-weight:bold; font-size:13px; line-height:25px;">

    </td>

   <td style="width:23%; text-align:center; color:#0C7298; font-weight:bold; font-size:13px; font-family: expresswayregular; ">
          <img style="width:75px; margin-top:17px;" src="../images/blues.png">
      <p style="margin-top:6px; margin-bottom:14px;">St.lois Blues</p>
      
    </td>

    <td style="width:7%; text-align:center;  ">
      <h2 style="margin-top:-6px; font-size:25px;">1-3</h2>
    </td>

    <td style="width:23%; text-align:center; color:#0C7298; font-weight:bold; font-size:13px; font-family: expresswayregular; ">
                <img style="width:75px; margin-top:17px;" src="../images/calgary.png">
      <p style="margin-top:6px; margin-bottom:14px;">Calgary flames</p>
    </td>

    <td style="width:23.5%; text-align:center; color:#0C7298; font-weight:bold; font-size:13px; line-height:25px;">

    </td>

  </tr>
</table>

  <table style="width:100%; background:; margin-bottom:20px; border:1px solid #DBDBDB; border-top:0px; ">

  <tr>
      <td style="width:10%;">
      </td>
    <td style="width:22.5%; text-align:center;">
    </td>

   <td style="width:14%; text-align:center;">
      
    </td>

<td style="width:7%; text-align:center; color:#7C7C7C;">
      <h3 style="margin-top:-20px;">1-3</h3>
    </td>

    <td style="width:14%; text-align:center; font-size:11px; color:#7C7C7C; text-align:left;">
      <p>1' Reilly Smith
Patrice Bergeron
Brad Marchand</p>
    </td>

    <td style="width:22.5%; text-align:center;">
    </td>
   <td style="width:10%;">
      </td>
  </tr>


  <tr>
      <td style="width:10%;">
      </td>
    <td style="width:22.5%; text-align:center;">
    </td>

    <td style="width:14%; text-align:center; font-size:11px; color:#7C7C7C; text-align:right;">

    </td>

<td style="width:7%; text-align:center; color:#7C7C7C;">
      <h3 style="margin-top:-20px;">1-2</h3>
    </td>

    <td style="width:14%; text-align:center; font-size:11px; text-align:left; color:#7C7C7C;">
      <p>21' Tommy Wingels Marc-Edouard Vlasic Patrick Marleau</p>
    </td>

    <td style="width:22.5%; text-align:center;">
    </td>
   <td style="width:10%;">
      </td>
  </tr>

    <tr>
      <td style="width:10%;">
      </td>
    <td style="width:22.5%; text-align:center;">
    </td>

    <td style="width:14%; text-align:center; font-size:11px; color:#7C7C7C; text-align:right;">
      <p>1' Reilly Smith
Patrice Bergeron
Brad Marchand</p>
    </td>

<td style="width:7%; text-align:center; color:#7C7C7C;">
      <h3 style="margin-top:-20px;">1-1</h3>
    </td>

    <td style="width:14%; text-align:center; font-size:12px;">

    </td>

    <td style="width:22.5%; text-align:center;">
    </td>
   <td style="width:10%;">
      </td>
  </tr>

    <tr>
      <td style="width:10%;">
      </td>
    <td style="width:22.5%; text-align:center;">
    </td>

    <td style="width:14%; text-align:center; font-size:11px; color:#7C7C7C; text-align:right;">

    </td>

<td style="width:7%; text-align:center; color:#7C7C7C;">
      <h3 style="margin-top:-20px;">0-1</h3>
    </td>

    <td style="width:14%; text-align:center; font-size:11px; text-align:left; color:#7C7C7C;">
      <p>34' Matt Duchene
Ryan O'Reilly</p>
    </td>

    <td style="width:22.5%; text-align:center;">
    </td>
   <td style="width:10%;">
      </td>
  </tr>

    
  
</table>










<table style="width:100%; background:; border:1px solid #DBDBDB; border-bottom:0px; ">

    <tr>

    <td style="width:23.5%; text-align:center; color:#0C7298; font-weight:bold; font-size:13px; line-height:25px;">

    </td>

   <td style="width:23%; text-align:center; color:#0C7298; font-weight:bold; font-size:13px; font-family: expresswayregular; ">
          <img style="width:75px; margin-top:17px;" src="../images/blues.png">
      <p style="margin-top:6px; margin-bottom:14px;">St.lois Blues</p>
      
    </td>

    <td style="width:7%; text-align:center;  ">
      <h2 style="margin-top:-6px; font-size:25px;">1-3</h2>
    </td>

    <td style="width:23%; text-align:center; color:#0C7298; font-weight:bold; font-size:13px; font-family: expresswayregular; ">
                <img style="width:75px; margin-top:17px;" src="../images/calgary.png">
      <p style="margin-top:6px; margin-bottom:14px;">Calgary flames</p>
    </td>

    <td style="width:23.5%; text-align:center; color:#0C7298; font-weight:bold; font-size:13px; line-height:25px;">

    </td>

  </tr>
</table>

  <table style="width:100%; background:; margin-bottom:20px; border:1px solid #DBDBDB; border-top:0px; ">

  <tr>
      <td style="width:10%;">
      </td>
    <td style="width:22.5%; text-align:center;">
    </td>

   <td style="width:14%; text-align:center;">
      
    </td>

<td style="width:7%; text-align:center; color:#7C7C7C;">
      <h3 style="margin-top:-20px;">1-3</h3>
    </td>

    <td style="width:14%; text-align:center; font-size:11px; color:#7C7C7C; text-align:left;">
      <p>1' Reilly Smith
Patrice Bergeron
Brad Marchand</p>
    </td>

    <td style="width:22.5%; text-align:center;">
    </td>
   <td style="width:10%;">
      </td>
  </tr>


  <tr>
      <td style="width:10%;">
      </td>
    <td style="width:22.5%; text-align:center;">
    </td>

    <td style="width:14%; text-align:center; font-size:11px; color:#7C7C7C; text-align:right;">

    </td>

<td style="width:7%; text-align:center; color:#7C7C7C;">
      <h3 style="margin-top:-20px;">1-2</h3>
    </td>

    <td style="width:14%; text-align:center; font-size:11px; text-align:left; color:#7C7C7C;">
      <p>21' Tommy Wingels Marc-Edouard Vlasic Patrick Marleau</p>
    </td>

    <td style="width:22.5%; text-align:center;">
    </td>
   <td style="width:10%;">
      </td>
  </tr>

    <tr>
      <td style="width:10%;">
      </td>
    <td style="width:22.5%; text-align:center;">
    </td>

    <td style="width:14%; font-size:11px; text-align:right; color:#7C7C7C;">
      <ul style="list-style-type: none; padding:0px;">
        <li>
          21' Tommy Wingels 
        </li>
        <li>
        21' Tommy Wingels 
        </li>
        <li>
    21' Tommy Wingels 
        </li>
      </ul>
    </td>

<td style="width:7%; text-align:center; color:#7C7C7C;">
      <h3 style="margin-top:-20px;">1-1</h3>
    </td>

    <td style="width:14%; text-align:center; font-size:12px;">

    </td>

    <td style="width:22.5%; text-align:center;">
    </td>
   <td style="width:10%;">
      </td>
  </tr>

    <tr>
      <td style="width:10%;">
      </td>
    <td style="width:22.5%; text-align:center;">
    </td>

    <td style="width:14%; text-align:center; font-size:11px; color:#7C7C7C; text-align:right;">

    </td>

<td style="width:7%; text-align:center; color:#7C7C7C; ">
      <h3 style="margin-top:-5px;">0-1</h3>
    </td>

    <td style="width:14%; font-size:11px; text-align:left; color:#7C7C7C;">
      <ul style="list-style-type: none; padding:0px;">
        <li>
          21' Tommy Wingels 
        </li>
        <li>
        21' Tommy Wingels 
        </li>
        <li>
   
        </li>
      </ul>
    </td>

    <td style="width:22.5%; text-align:center;">
    </td>
   <td style="width:10%;">
      </td>
  </tr>

    
  
</table>
















   
        <img class="newsbanner" src="images/banner.gif">



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
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>