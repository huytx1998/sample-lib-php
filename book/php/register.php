<?php 
session_start();

$servername = "localhost";

$conn = mysqli_connect($servername, "root", "", "book");

if (isset($_POST['register_button'])) {


$username = mysqli_real_escape_string($conn, $_POST['username']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$address = mysqli_real_escape_string($conn, $_POST['address']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$id = mysqli_real_escape_string($conn, $_POST['id']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$password2 = mysqli_real_escape_string($conn, $_POST['password2']);

$sql1 = "SELECT * FROM users WHERE full_name = '$username'";
$result1 = mysqli_query($conn, $sql1); 

if (mysqli_num_rows($result1) >= 1) {
	$_SESSION['message'] = "Username existed in database";
} else {
	if (strlen($username) == 0 || strlen($email) == 0 || strlen($password) == 0 || strlen($password2) == 0 ) {
		$_SESSION['message'] = "Not enough info!"; 
	}  else	if ($password == $password2 && substr($id, 0, 2) < 18 && strlen($id)== 10) {
	//create user to enter database
		$createUser = "CREATE USER '$username'@'localhost' IDENTIFIED BY '$password'";
		mysqli_query($conn, $createUser); 
		// insert user

		$password = md5($password); //hash the password.
		$sql = "INSERT INTO users(full_name, email, address, phone_number, studentID, password) VALUES('$username', '$email', '$address', '$phone', '$id', '$password')";

		$result = mysqli_query($conn, $sql);
		$sql2 = "GRANT SELECT, ALTER, CREATE TEMPORARY TABLES, EXECUTE ON *.* TO '$username'@'localhost' REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;";
		mysqli_query($conn, $sql2);
		
		$_SESSION['message'] = "You are logged in";
		$_SESSION['username'] = $username;
		header("location: index.php"); //redirect to home after registering successfully
	} else {
		$_SESSION['message'] = "2 passwords do not match, or your student ID is not correct";
	}
}

}
?>

<!DOCTYPE html>
<html>
<head>
<title>Register Page</title>
<link rel="icon" href="image/favicon.ico">
<link rel="stylesheet" type="text/css" href="style.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

</head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<!-- <div class="jumbotron"> -->
  <br>
  <img src="image/banner.jpg" style="width: 100%;">
  <h3>Hanu Library website</h3>
</div>
</br>
<body>
<div class="header"> 
	<h1> Register </h1>
</div>

<?php 
if (isset($_SESSION['message'])) {
	echo "<div id = 'error_msg'>".$_SESSION['message']."</div";
	unset($_SESSION['message']);
} ?>

<form method="POST" action="register.php">
	<table>
		<tr>
			<td>Username: </td>
			<td><input type="text" name="username" class="textInput"></td>
		</tr>

		<tr>
			<td>Email: </td>
			<td><input type="email" name="email" class="textInput"></td>
		</tr>

		<tr>
			<td>Address: </td>
			<td><input type="text" name="address" class="textInput"></td>
		</tr>

		<tr>
			<td>Phone Number: </td>
			<td><input type="number" name="phone" class="textInput"></td>
		</tr>

		<tr>
			<td>Student ID: </td>
			<td><input type="number" name="id" class="textInput"></td>
		</tr>

		<tr>
			<td>Password: </td>
			<td><input type="password" name="password" class="textInput"></td>
		</tr>

		<tr>
			<td>Re-type Password: </td>
			<td><input type="password" name="password2" class="textInput"></td>
		</tr>

		<tr>
			<td></td>
			<td><input type="submit" name="register_button" value="Register" class="btn btn-primary"></td>
		</tr>
	</table>
</form>
</body>
</html>