<?php 
session_start();
?>
<!DOCTYPE HTML>
<html>

<head>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
	<title>Reset Password | Black Box</title>
</head>

<body>
	<section class="main">
		<h1><a href="http://ownbox.no-ip.biz">Black Box</a></h1>
		<p>Please fill in the form below to reset your password.</p>
		<form method="post" action="reset.php" name="aform">
			<input type="hidden" name="action" value="reg2">
			<input type="hidden" name="user" value="orthodoxrings">
			<p>Enter Username:</p>
			<input type="text" name="username">
			<p>Choose new password:</p>
			<input type="password" name="password1">
			<p>Verify new password:</p>
			<input type="password" name="password2">
			<p>Hexidecimal code (see manual):</p>
			<input type="text" name="hexcode">
			<br>
			<input type="submit" value="Submit">
		</form>
		<p class="signinorUp"><a href="http://ownbox.no-ip.biz/#signin">Sign In</a> or <a class="signupAgain" href="http://ownbox.no-ip.biz/">Sign Up</a></p>
	</section>
</body>

</html>
