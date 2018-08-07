<?php 
include("header.php");
session_start();
if (isset($_SESSION['username'])) {
$username = $_SESSION['username'];
}

$servername = "localhost";

$conn = mysqli_connect($servername, "root", "", "book");
?>

<?php if (isset($_SESSION['username'])) { ?>
  <style> #login_button {display: none} #register_button {display: none;} </style>
  <?php } ?> 

  <?php if (isset($_SESSION['username'])) { ?>
  <li> <a href="#">Welcome <?php echo "<strong> $username, </strong>";
  echo "search for your book here:"; ?></a></li>
  <?php } ?> 

<form id="searchBox"  method="GET" action="searchResult.php" target="_blank">
  <input class = "form-control" type="text" placeholder="Search for books.." name="search">
  <input class="btn btn-default btn-lg" type="submit" name="search_button" value="Search" class="btn">
</form>

<title>Home Page</title>
<h3>News</h3>

<div class="row news_display text-center">
  <div class="col-md-4">

<?php 
  $sql = "SELECT * FROM news";
  $sql_result = mysqli_query($conn, $sql);
  $rows = mysqli_num_rows($sql_result);

  if ($rows % 3 == 0) {
  $row1 = $rows/3;
  $row2 = $row1+$row1;
  $row3 = $row1 + $row2;

} 
if ($rows %3 == 1) {
  $row1 = round(($rows/3)) + 1;
  $row2 = (2*$row1) - 1; 
  $row3 = $row2 + $row1 - 1;

 
}
 if ($rows % 3 == 2) {
  $row1 = round(($rows/3));
  $row2 = $row1 + $row1;
  $row3 = 3 * $row1 - 1; 
} 

?>

<?php
  $sql1 = "SELECT * FROM news WHERE id BETWEEN '1' AND '$row1'";
  $sql1_result = mysqli_query($conn, $sql1);

   while($row1_dp = mysqli_fetch_assoc($sql1_result)) {
	?>
        <img class="jumbotron" id="news_img" src="image/<?php echo $row1_dp['image'];?>"> 
         <form method="GET" action="news.php" target="_blank"> 
          <input type = "submit" class="btn btn-primary" value ="Read More"/>
          <input type="text" name="title" value ="<?php echo $row1_dp['title'];?>" style="display:none">
           <h2> <?php echo $row1_dp['title'];?></h2>
          <input type="text" name="content" value ="<?php echo $row1_dp['content'];?>" style="display:none">
        <p type="text" name="content"> <?php echo $row1_dp['content'];?></p>
       </form>
    
   <?php  }  ?>
 </div>

 <div class="col-md-4">
   <?php
  $row1plus = $row1 + 1;
  $sql2 = "SELECT * FROM news WHERE id BETWEEN '$row1plus' AND '$row2'";
  $sql2_result = mysqli_query($conn, $sql2);

   while($row2_dp = mysqli_fetch_assoc($sql2_result)) {
  ?>
  
  <div>
        <img class="jumbotron" id="news_img" src="image/<?php echo $row2_dp['image'];  ?>" > 
         <form method="GET" action="news.php" target="_blank"> 
          <input type = "submit" class="btn btn-primary" value ="Read More"/>
          <input type="text" name="title" value ="<?php echo $row2_dp['title'];?>" style="display:none">
           <h2> <?php echo $row2_dp['title'];?></h2>
          <input type="text" name="content" value ="<?php echo $row2_dp['content'];?>" style="display:none">
        <p type="text" name="content"> <?php echo $row2_dp['content'];?></p>
       </form>
      </div>
	
  <?php } ?>
  </div>
 
 <div class="col-md-4">
   <?php
  $row2plus = $row2 + 1;
  $sql3 = "SELECT * FROM news WHERE id BETWEEN '$row2plus' AND '$row3'";
  $sql3_result = mysqli_query($conn, $sql3);

   while($row3_dp = mysqli_fetch_assoc($sql3_result)) {
  ?>
  
  <div>
        <img class="jumbotron" id="news_img" src="image/<?php echo $row3_dp['image'];  ?>" > 
         <form method="GET" action="news.php" target="_blank"> 
          <input type = "submit" class="btn btn-primary" value ="Read More"/>
          <input type="text" name="title" value ="<?php echo $row3_dp['title'];?>" style="display:none">
           <h2> <?php echo $row3_dp['title'];?></h2>
          <input type="text" name="content" value ="<?php echo $row3_dp['content'];?>" style="display:none">
        <p type="text" name="content"> <?php echo $row3_dp['content'];?></p>
       </form>
      </div>
  
  <?php } ?>
  </div>
</div>



  <?php 
  include 'footer.php';  
  ?>