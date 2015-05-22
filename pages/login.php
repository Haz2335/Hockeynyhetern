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
  <body class="loginBody">
    <!-- START HEADER-->

   <?php include '../elements/header.php';?>
    
    <!-- END HEADER-->


<!--<div class="senasteslide">
</div>-->


<div class="loginBg">

<div class="logInContainer">
  <center>

    <h3 class="loginHeading">Logga in på Hockeynyheter</h3>
    <form method="" action="">
      <input class="loginInput" type="text" placeholder="Email" name="">
      <br />
      <input class="loginInput" type="password" placeholder="Lösenord" name="">
      <br />
      <input class="loginButtom" type="submit" value="Logga in">
      <br />
    </form>




<div class="loginLink">
<a class="float-left "href="register.php">Registrera dig</a>
<a class="float-right" href="index.php">Tillbaka till Start</a>
</div>

</center>

</div><!-- end login container-->
        
</div>


<!-- START FOOTER-->
<?php include '../elements/footer.php'; ?>
<!-- END FOOTER-->





    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>