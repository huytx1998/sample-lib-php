<?php 
include 'header.php';
?>
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