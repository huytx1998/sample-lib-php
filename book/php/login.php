<?php
session_start();

$servername = "localhost";

$db = mysqli_connect($servername, "root", "", "book");
include('header.php');


if (isset($_POST['login_button'])) {
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password = mysqli_real_escape_string($db, $_POST['password']);

	$password = md5($password); // hash password to match.
	$sql = " SELECT * FROM users WHERE full_name = '$username' AND password = '$password' ";
	$result = mysqli_query($db, $sql);

	if (mysqli_num_rows($result) == 1) { 
		$_SESSION['message'] = "Logged in!";	
		$_SESSION['username'] = $username;
		header("location: index.php"); //redirect to home page
	} else {
		$_SESSION['message'] = "Incorrect password or username";
	}
}

?>

<div class="text-center"> 
	<h1> Log in </h1>
	
	<?php 
	if (isset($_SESSION['message'])) {
		echo "<div id = 'error_msg'>".$_SESSION['message']."</div>";
		unset($_SESSION['message']);
	} ?>

	<div>
		<form method="POST" action="login.php">
			<table>
				<tr>
					<td>Username: </td>
					<td><input type="text" name="username" class="textInput"></td>
				</tr>

				<tr>
					<td>Password: </td>
					<td><input type="password" name="password" class="textInput"></td>
				</tr>

				<tr>
					<td></td>
					<td><input type="submit" name="login_button" value="Log in" class="btn btn-primary"></td>
				</tr>
			</table>
		</form>
	</div>
</div>

<?php include('footer.php'); ?>
</body>
</html>

 	