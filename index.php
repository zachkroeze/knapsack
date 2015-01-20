<!DOCTYPE HTML>
<html>
<head>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="js/main.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Main | Black Box</title>
</head>

<body>
	<section class="main">
		<h1><a href="http://ownbox.no-ip.biz">Black Box</a></h1>
		<form id="signupForm" method="post" action="insert.php" name="aform">
			<input type="hidden" name="action" value="reg2">
			<input type="hidden" name="user" value="orthodoxrings">
			<p>Choose username:</p>
			<input type="text" name="username">
			<p>Choose password:</p>
			<input type="password" name="password1">
			<p>Verify password:</p>
			<input type="password" name="password2">
			<p>Hexidecimal code (see manual):</p>
			<input type="text" name="hexcode">
			<br>
			<input class="signupButton" type="submit" value="Sign Up">
		</form>
		<?php /* Display errors */ ?>
		<?php if($USER->error!="") { ?>
		<p class="error">Error: <?php echo $USER->error; ?></p>
		<?php }
		?>		


		<p class="alreadyRegistered" >Already registered? <a id="signinShow" href="#">Sign into Black Box</a></p>
		<form class="signinForm" method="post" action="verification.php" name="aform" target="_top">
			<input type="hidden" name="action" value="login">
			<input type="hidden" name="hide" value="">
			<p>Username:</p><input type="text" name="username">
			<p>Password:</p><input type="password" name="password">
			<br>
			<input class="signinButton" type="submit" value="Sign In">
		</form>
		<p class="trouble">Trouble signing in?<br> <a href="http://ownbox.no-ip.biz/lost_password.php">Reset your password</a> or <a class="signupAgain" href="#">sign up</a></p>
	</section>
</body>

</html>
