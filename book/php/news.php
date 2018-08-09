<!DOCTYPE html>
<html lang="en">
<head>
<title>News</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<!-- <div class="jumbotron"> -->
  <br>
  <img src="image/banner.jpg" style="width: 100%;">
  <h3>Hanu Library website</h3>
</div>
</br>

<div class="container">
<ul class="nav nav-pills navbar ">
  <li class="active"> <a href="index.php">Home</a></li>
  <li> <a href="about.php">About Us</a></li>
  <li> <a id="register_button" href="register.php">Register</a></li>
  <li> <a id="login_button" href="login.php">Log In</a></li>

  <?php if (isset($_SESSION['username'])) { ?>
  <style> #login_button {display: none} #register_button {display: none;} </style>
  <?php } ?> 
  
  <li> <a href="logout.php">Log Out</a></li>  
  <?php if (isset($_SESSION['username'])) { ?>

  <li> <a href="#">Welcome <?php echo "<strong> $username </strong>" ?></a></li>
  <?php } ?>   
</ul> 

<div id="big_picture" class="jumbotron">
  <h1>Welcome to Hanu's Library website</h1>
  <style> .big_picture {
width: 100%;
}   </style>
  <img id="big_picture" src="image/Library.jpg" width="100%"> 
</div>

<div class = "container">
<div class="row">
<h1 style="text-align: center;
margin-bottom: 25px;">
	
	<?php echo $_GET["title"]; ?>
	
</h1>


</div>
<div class ="row">
<p>
	<?php echo $_GET["content"]; ?>
</p>

</div>
</div>

<?php include('footer.php'); ?>