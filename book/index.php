<?php
session_start();
$username = $_SESSION['username'];
$servername = "localhost";

$conn = mysqli_connect($servername, "root", "", "book");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
</head>
<body>
  <!-- <div class="jumbotron"> -->
    <br>
    <img src="image/Hanu.jpg" style="background-color: red">


    <h3>HANU book page</h3>
  </div>

</br>

<div class="container">
  <ul class="nav nav-pills navbar ">
    <li class="active"> <a href="#">Home</a></li>
    <li> <a href="#">About Us</a></li>
    <li> <a href="#">Contacts</a></li>  
    <li> <a href="login.php">Log Out</a></li>    
    <li> <a href="#">Welcome <?php echo "<strong> $username </strong>" ?></a></li>

  </ul> 

  <div class="jumbotron">
    <h1>TEXT</h1>
    <p>TEXT.</p> 
  </div>
  <div class="row">
  <?php 

  $sql = "SELECT image FROM books";
  $sql_display= mysqli_query($conn, $sql);

  while ($row = mysqli_fetch_assoc($sql_display)) { ?>

    <div class="col-md-3">
    <div class="jumbotron"> 
    <div> <img src="image/triet.jpg" alt="" class="img-rounded"
        style="max-width: 250px; height:250px;"> 
        <h2>Book name</h2> 
        <h4>Description</h4>
        <a href="index.php?page=detail&ID=<?= $product_search['id'];?>
          " class="btn btn-primary" title="Detail">Detail »</a> 
    </div>
    </div>
    </div>

  <?php } ?>
  




  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script> -->
  </body>
  </html>