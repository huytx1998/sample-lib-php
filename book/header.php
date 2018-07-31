
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="slider.css">
<link rel="icon" href="image/favicon.ico">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
</head>


<!-- <div class="jumbotron"> -->
<br>
  <img src="image/banner.jpg" style="width: 100%;">
  <h3>Hanu Library website</h3>

</br>

<div class="container">
<ul class="nav nav-pills navbar ">
  <li class="active"> <a href="index.php">Home</a></li>
  <li> <a href="aboutUs.php">About Us</a></li>
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
  <div class="slider-holder">
    
    <div>
        <span id="slider-image-1"></span>
        <span id="slider-image-2"></span>
        <span id="slider-image-3"></span>
    </div>

        <div class="image-holder">
            <img src="image/slider/lib.jpg" class="slider-image" />
            <img src="image/slider/lib1.jpg" class="slider-image" />
            <img src="image/slider/lib2.jpg" class="slider-image" />
        </div>
        
        <div class="button-holder">
            <a href="#slider-image-1" class="slider-change"></a>
            <a href="#slider-image-2" class="slider-change"></a>
            <a href="#slider-image-3" class="slider-change"></a>
        </div>
    </div>
  </div>
</div>