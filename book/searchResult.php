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
<title>Search Result</title>
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
<li> <a href="news.php">News</a></li>  
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
}   
</style>
<img id="big_picture" src="image/Library.jpg" width="100%"> 
</div>

<h3>Have found:</h3>

<?php if (isset($_GET['search'])) {
$sql = "SELECT * FROM books WHERE (`name` LIKE '%".$_GET['search']."%') OR (`description` LIKE '%".$_GET['search']."%')";
$raw_results = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($raw_results)) { ?>
<div class="col-md-4">
<div class="jumbotron"> 
  <div> <img src="image/<?php echo $row['image'];  ?>" alt="" class="img-rounded"
    style="max-width: 250px; height:250px;"> 
    
   <form method="GET" action="borrow.php" target="_blank"> <br>
   
   <input type="text" name="image_name" value = "<?php echo $row['image'];?> "
    style="display:none">
   
   <input type = "submit" name="borrow" class="btn btn-primary" value ="Borrow"/>
    
    <input type="text" name="name" value ="<?php echo $row['name'];?> "
    style="display:none">
    <h2> <?php echo $row['name'];?></h2>
    <input type="text" name="description" value ="<?php echo $row['description'];?> "
    style="display:none">
    <p type="text" name="description"> <?php echo $row['description'];?></p>
    <input type="text" name="quantity" value ="<?php echo $row['quantity'];?> "
    style="display:none">
    <p type="text" name="quantity"> Available : <?php echo $row['quantity'];?></p>
 
   </form>
  </div>
</div>
</div>
</div>

<?php } } ?>



<footer class="footer">
  <div class="row">
    <div class="border col-xs-4"> <img src="image/Hanu.jpg"></div>
    <div class="border col-xs-4"> Adress: Km9 Nguyen Trai, Thanh Xuan dist, Hanoi <br> 
      <p>Phone: 024-132987 <br> Anything here <br> Also something here </p>       
    </div>
    <div class="border col-xs-4">Find us on social media: <br>
     <a href="https:facebook.com/huytx0909" target="_blank"> <i style="font-size:24px"  class="fa">&#xf230; Facebook</i> </a> <br>
     <a href="https:Instagram.com" target="_blank"> <i style="font-size:24px" class="fa">&#xf16d; Instagram</i> </a> <br>
     <a href="https:Twitter.com" target="_blank"> <i style="font-size:24px" class="fa">&#xf099; Twitter</i> </a>
   </div>
 </div>
 <br>
 <b><p>Created by: Huytx  <br>
 Contact information: huytx0909@gmail.com <br> 
 Phone: 01287.173.832  </p></b>               
</footer>