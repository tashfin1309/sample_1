<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/style.css">

	<title>Register Form | "X" Internation School & College </title>
</head>
<body class="bod">
	<div class="contain">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input-group">
			     <input type="text" placeholder="ID" name="ID" required>
			</div>
			<div class="input-group">
			     <input type="email" placeholder="Email" name="email" required>
			</div>
			<div class="input-group">
			     <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="input-group">
			     <input type="password" placeholder="Confirm Password" name="cpassword" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="login.php">Login Here</a>.</p>
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


error_reporting(0);
session_start();



if (isset($_SESSION['ID'])) {
    header("Location: login.php");
}

if (isset($_POST['submit'])) {
	$ID = $_POST['ID'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM register_table WHERE ID='$ID' OR email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO register_table (ID, email, password, cpassword)
					VALUES ('$ID', '$email', '$password', '$cpassword')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$ID = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			}
			else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} 
		else {
			echo "<script>alert('Woops! Your Email Or ID Already Exists.')</script>";
		}
		
	}
	else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>

<!-- PHP ends here -->