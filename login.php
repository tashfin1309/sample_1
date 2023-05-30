<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/style.css">

	<title>Login Form | "X" Internation School & College</title>
</head>
<body class="bod">
	<div class="contain">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
			     <input type="ID" placeholder="ID" name="ID" required>
			</div>
			<div class="input-group">
			     <input type="email" placeholder="Email" name="email" required>
			</div>
			<div class="input-group">
			     <input type="password" placeholder="Password" name="password" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
            <br>
            <p class="login-register-text">Want to go back to home? <a href="index.php">Click here</a>.</p>

		</form>
	</div>
</body>
</html>

<!-- PHP starts here -->


<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "project2";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

session_start();

error_reporting(0);

if (isset($_SESSION['ID'])) {
    header("Location: information_portal.php");
}

if (isset($_POST['submit'])) {
	$ID = $_POST['ID'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM register_table WHERE ID='$ID' AND email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['ID'] = $row['ID'];
		header("Location: information_portal.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>

<!-- PHP ends here -->