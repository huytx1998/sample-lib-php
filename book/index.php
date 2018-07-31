<?php $newTitle = "Home Page"?>
<?php
    ob_start();
    include 'header.php';;
    $buffer=ob_get_contents();
    ob_end_clean();

    $buffer=str_replace($title,$newTitle,$buffer);
    echo $buffer;
?>
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
<title>Home Page</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<form  method="GET" action="searchResult.php" target="_blank">
  <input class = "form-control" type="text" placeholder="Search for books.." name="search">
  <input class="btn btn-default btn-lg" type="submit" name="search_button" value="Search" class="btn">
</form>
<br>
<h3>News</h3>


<?php 
  $sql = "SELECT * FROM news";
  $sql_result = mysqli_query($conn, $sql);
  $rows = mysqli_num_rows($sql_result);
echo $rows;
  if ($rows % 3 == 0) {
  $row1 = $rows/3;
  $row2 = $row1+$row1;
  $row3 = $row1 + $row2;

  echo $rows; echo "\n";
  echo $row1; echo "\n";
  echo $row2; echo "\n";
  echo $row3;
} 
if ($rows %3 == 1) {
  $row1 = round(($rows/3)) + 1;
  $row2 = (2*$row1) - 1; 
  $row3 = $row2 + $row1 - 1;

  echo $rows; echo "\n";
  echo $row1; echo "\n";
  echo $row2; echo "\n";
  echo $row3;
}
 if ($rows % 3 == 2) {
  $row1 = round(($rows/3));
  $row2 = 2 * $row1;
  $row3 = 3 * $row1 - 1;
  
  echo $rows; echo "\n";
  echo $row1; echo "\n";
  echo $row2; echo "\n";
  echo $row3;
} 

  $sql1 = "SELECT * FROM news WHERE id BETWEEN '1' AND '$row1'";
  $sql1_result = mysqli_query($conn, $sql1);

   while($row1_dp = mysqli_fetch_assoc($sql1_result)) {

 
   
	?>

<div class="row">
  <div class="col-md-4">
      <div> <img src="image/<?php echo $row1_dp['image'];  ?>" class="img-rounded jumbotron" 
        style="width:98% ; height:98%;"> 
       <form method="GET" action="news.php" target="_blank"> <br>
       <input type = "submit" class="btn btn-primary" value ="Read More"/>
        <input type="text" name="title" value ="<?php echo $row1_dp['title'];?> "
        style="display:none">
        <h2> <?php echo $row1_dp['title'];?></h2>
        <input type="text" name="content" value ="<?php echo $row1_dp['content'];?> "
        style="display:none">
        <p type="text" name="content"> <?php echo $row1_dp['content'];?></p>
       </td>
       </form>
      </div>
    </div>
  

   <?php  }  ?>
   
   <?php  
	$row1plus = $row1 + 1;
  $sql2 = "SELECT * FROM news WHERE id BETWEEN '$row1plus' AND '$row2'";
  $sql2_result = mysqli_query($conn, $sql2);

   while($row2_dp = mysqli_fetch_assoc($sql2_result)) {
   ?>
	<div class="col-md-4">
      <div> <img src="image/<?php echo $row2_dp['image'];  ?>" class="img-rounded jumbotron" 
        style="width:98% ; height:98%;"> 
       <form method="GET" action="news.php" target="_blank"> <br>
       <input type = "submit" class="btn btn-primary" value ="Read More"/>
        <input type="text" name="title" value ="<?php echo $row2_dp['title'];?> "
        style="display:none">
        <h2> <?php echo $row2_dp['title'];?></h2>
        <input type="text" name="content" value ="<?php echo $row2_dp['content'];?> "
        style="display:none">
        <p type="text" name="content"> <?php echo $row2_dp['content'];?></p>
       </td>
       </form>
      </div>
    </div>
   
   
   <?php } ?>

   <?php  
	$row2plus = $row2 + 1;
  $sql3 = "SELECT * FROM news WHERE id BETWEEN '$row2plus' AND '$row3'";
  $sql3_result = mysqli_query($conn, $sql3);

   while($row3_dp = mysqli_fetch_assoc($sql3_result)) {
   ?>
	<div class="col-md-4">
      <div> <img src="image/<?php echo $row3_dp['image'];  ?>" class="img-rounded jumbotron" 
        style="width:98% ; height:98%;"> 
       <form method="GET" action="news.php" target="_blank"> <br>
       <input type = "submit" class="btn btn-primary" value ="Read More"/>
        <input type="text" name="title" value ="<?php echo $row3_dp['title'];?> "
        style="display:none">
        <h2> <?php echo $row3_dp['title'];?></h2>
        <input type="text" name="content" value ="<?php echo $row3_dp['content'];?> "
        style="display:none">
        <p type="text" name="content"> <?php echo $row3_dp['content'];?></p>
       </td>
       </form>
      </div>
    </div>
	</div>
   
   
   <?php } ?>
  
  
  
  
  
  
  
  </body>

  
</html>
  <?php 
  include 'footer.php';  
  ?>