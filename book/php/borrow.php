<?php
session_start();
if (isset($_SESSION['username'])) {
$username = $_SESSION['username'];
}

$servername = "localhost";

$conn = mysqli_connect($servername, "root", "", "book");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="image/favicon.ico">
<title>Borrowed</title>
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




<h3> You have just borrowed: </h3>

<div class = "col-md-5">
<div class="jumbotron">
<img src="image/<?php echo $_GET['image_name'] ?>">
<h2> <?php 
$name = $_GET['name'];
echo $_GET['name']; ?></h2>
<p><?php echo $_GET['description']; ?></p>
</div>
</div>

<div class = "col-md-5">
<div class="jumbotron">
<p>Due date will be:</p>
<br>
<?php 
$quantity_minus = "UPDATE books SET quantity = quantity - 1 WHERE name = '$name';";
$quantity_minus_rs = mysqli_query($conn, $quantity_minus);
$dueDate = date("d-m-Y", strtotime("+ 7 day") ); 
?>
<p><?php echo $dueDate ?></p>
</div>
</div> 
</div>




<br>
<br>















<footer class="footer">
  <div class="row">
    <div class="border col-xs-4"> <img src="image/Hanu.jpg"></div>
    <div class="border col-xs-4"> <b><p>Created by: Huytx  <br>
                                        Contact information: huytx0909@gmail.com <br> 
                                        Phone: 01287.173.832  </p></b> 
                                          &copy; <i>ALL RIGHTS RESERVED </i>       
    </div>
    <div class="border col-xs-4">Find me on social media: <br>
     <a href="https:facebook.com/huytx0909" target="_blank"> <i style="font-size:24px"  class="fa">&#xf230; Facebook</i> </a> <br>
     <a href="https:Instagram.com" target="_blank"> <i style="font-size:24px" class="fa">&#xf16d; Instagram</i> </a> <br>
     <a href="https:Twitter.com" target="_blank"> <i style="font-size:24px" class="fa">&#xf099; Twitter</i> </a>
   </div>
 </div>
 <br>
 Adress: Km9 Nguyen Trai, Thanh Xuan dist, Hanoi <br> 
      <p>Phone: 024-132987 <br> Hotline: 0437326132 <br> Hanu's Library </p>   
            
</footer>
</body>
</html>