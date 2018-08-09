<?php
session_start();
include("header.php");
if (isset($_SESSION['username'])) {
$username = $_SESSION['username'];
}

$servername = "localhost";

$conn = mysqli_connect($servername, "root", "", "book");

?>



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
            <figure><img src="../image/julia.jpg" width="50%" alt="">
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
            <figure><img src="../image/team3.jpg" alt="">
              <figcaption>
                <p class="team_name"> <b>Name Goes Here</b></p>
                <p class="team_title">Librarian</p>
                <p class="team_description">Vestassapede et donec ut est liberos sus et eget sed eget. Quisqueta habitur augue magnisl magna phas ellus sagit titor ant curabi turpis.</p>
              </figcaption>
            </figure>
          </li>
          <li class="one_third first">
            <figure><img src="../image/team5.jpg" alt="">
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
            <figure><img src="../image/team6.jpg" alt="">
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


<?php include('footer.php'); ?> 