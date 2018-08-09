<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- SITE STYLE -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/owl.carousel.css"/>
<link rel="icon" href="../image/favicon.ico">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
<?php 
echo "<link rel='stylesheet' type='text/css' href='../css/style.css'/>"
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<!-- MAKING BANNER -->
<br>
  <img id="banner" src="../image/banner.jpg" style=" width: 100%;">
  <h3>Hanu Library website</h3>
</br>
<!-- END BANNER -->

<!-- NAV BAR -->
<header>
  <nav class="navbar navbar-inverse">
    <div class="container">
      <button class="navbar-toggle" data-toggle="collapse" data-target = ".navHeaderCollapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>

<div class="container">
    <div class="collapse navbar-collapse navHeaderCollapse">
    <ul class="nav navbar-nav">
      <li> <a href="index.php">Home</a></li>

   
   
    <li class="dropdown">
    <a href="aboutUs.php">About Us</a>
        <div class="dropdown-content">
          <a href="#"> a </a>
          <a href="#"> a </a>
          <a href="#"> a </a>
        </div>
  </li>


      <li> <a id="register_button" href="register.php">Register</a></li>
      <li> <a id="login_button" href="login.php">Log In</a></li>

      <?php if (isset($_SESSION['username'])) { ?>
      <style> #login_button {display: none} #register_button {display: none;} </style>
      <?php } ?> 
  
      <li> <a href="logout.php">Log Out</a></li>  
      <?php if (isset($_SESSION['username'])) { ?>

      <li> <a href="#">Welcome <?php
      $name = strtoupper($username);
       echo "<strong> $name </strong>" ?></a></li>
      <?php } ?>   
    </ul> 
  </div>
 </div>
</div>
</nav>
</header>

  <div id="big_picture" class="jumbotron text-center">
      <h1>Welcome to Hanu's Library website</h1>
      <img  src="../image/Library.jpg" style="width: 100%;"> 
  </div>

</header>
<!-- END NAV BAR -->
