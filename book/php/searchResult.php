<?php
session_start();
if (isset($_SESSION['username'])) {
$username = $_SESSION['username'];
}
$servername = "localhost";
$conn = mysqli_connect($servername, "root", "", "book");
include('header.php');
?>

<body>
  <?php if (isset($_GET['search'])) {
    $sql = "SELECT * FROM books WHERE (`name` LIKE '%".$_GET['search']."%') OR (`description` LIKE '%".$_GET['search']."%')";
    $raw_results = mysqli_query($conn, $sql); ?>
      <h3>Have found: <?php echo mysqli_num_rows($raw_results) ?> book(s) </h3> 

      <div class="row"> 
  <?php while ($row = mysqli_fetch_assoc($raw_results)) { ?>
  

  <div class="col-md-4 searchRs ">
    <div> <img src="image/<?php echo $row['image'];  ?>" alt="" class="img-rounded"
      style="max-width: 250px; height:250px;">     </div>
     <form method="GET" action="borrow.php" target="_blank"> <br>   
     <input type="text" name="image_name" value = "<?php echo $row['image'];?>" style="display:none">
     <input type = "submit" id="borrow_btn" name="borrow" class="btn btn-primary" value ="Borrow"/>
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

   <?php
      $_SESSION['quantity'] = $row['quantity'];
      if ($_SESSION['quantity'] < 1) {
   ?>

<script type="text/javascript">
   document.getElementById('borrow_btn').id = 'two';
</script>
      
     <p> Cannot borrow </p>
     <style> 
      #two {
        display: none;
      }
    </style>

<?php
 }
    unset($_SESSION['quantity']);
       
    ?>
  </div>

<?php
} ?>
</div>
<?php 
} 
?>

<?php
include ('footer.php'); 
?>


