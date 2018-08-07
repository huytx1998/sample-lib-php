<?php
session_start();
include("header.php");
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
<title>About Us</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


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



<div class="wrapper row2">
  <div id="container" class="clear">
    <div id="about-us" class="clear">
     
      <section id="about-intro" class="clear">
        <h2>About Us</h2>
        <img src="image/" alt="">
        <p>In sed neque id libero pretium luctus. Vivamus faucibus. Ut vitae elit. In hac habitasse platea dictumst. Proin et nisl ac orci tempus luctus. Aenean lacinia justo at nisi. Vestibulum sed eros sit amet nisl lobortis commodo. Suspendisse nulla. Vivamus ac lorem. Aliquam pulvinar purus at felis. Quisque convallis nulla id ipsum. Praesent vitae urna. Fusce blandit nunc nec mi. Praesent vestibulum hendrerit ante.</p>
        <p>Vivamus accumsan. Donec molestie pede vel urna. Curabitur eget sem ornare felis gravida vestibulum.Sed pulvinar, tellus in venenatis vehicula, lorem magna dignissim erat, in accumsan ante lorem sit amet lorem.</p>
      </section>
     
      <section id="team">
        <h2>Our Team</h2>
        <ul class="clear">
          <li class="one_third first">
            <figure><img src="image/julia.jpg" width="50%" alt="">
              <figcaption>
                <p class="team_name"> <b>Name Goes Here</b></p>
                <p class="team_title"> Head of Library</p>
                <p class="team_description">Vestassapede et donec ut est liberos sus et eget sed eget. Quisqueta habitur augue magnisl magna phas ellus sagit titor ant curabi turpis.</p>
              </figcaption>
            </figure>
          </li>
          <li class="one_third">
            <figure><img src="image/team2.jpg" alt="">
              <figcaption>
                <p class="team_name"> <b>Name Goes Here</b></p>
                <p class="team_title">Librarian</p>
                <p class="team_description">Vestassapede et donec ut est liberos sus et eget sed eget. Quisqueta habitur augue magnisl magna phas ellus sagit titor ant curabi turpis.</p>
              </figcaption>
            </figure>
          </li>
          <li class="one_third">
            <figure><img src="image/team3.jpg" alt="">
              <figcaption>
                <p class="team_name"> <b>Name Goes Here</b></p>
                <p class="team_title">Librarian</p>
                <p class="team_description">Vestassapede et donec ut est liberos sus et eget sed eget. Quisqueta habitur augue magnisl magna phas ellus sagit titor ant curabi turpis.</p>
              </figcaption>
            </figure>
          </li>
          <li class="one_third first">
            <figure><img src="image/team5.jpg" alt="">
              <figcaption>
                <p class="team_name"> <b>Name Goes Here</b></p>
                <p class="team_title">Job Title Here</p>
                <p class="team_description">Vestassapede et donec ut est liberos sus et eget sed eget. Quisqueta habitur augue magnisl magna phas ellus sagit titor ant curabi turpis.</p>
              </figcaption>
            </figure>
          </li>
          <li class="one_third">
            <figure><img src="image/team4.jpg" alt="">
              <figcaption>
                <p class="team_name"> <b>Name Goes Here</b></p>
                <p class="team_title">Tech Service</p>
                <p class="team_description">Vestassapede et donec ut est liberos sus et eget sed eget. Quisqueta habitur augue magnisl magna phas ellus sagit titor ant curabi turpis.</p>
              </figcaption>
            </figure>
          </li>
          <li class="one_third">
            <figure><img src="image/team6.jpg" alt="">
              <figcaption>
                <p class="team_name"> <b>Name Goes Here</b></p>
                <p class="team_title">Job Title Here</p>
                <p class="team_description">Vestassapede et donec ut est liberos sus et eget sed eget. Quisqueta habitur augue magnisl magna phas ellus sagit titor ant curabi turpis.</p>
              </figcaption>
            </figure>
          </li>
        </ul>
      </section>
    </div>
  </div>
</div>


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