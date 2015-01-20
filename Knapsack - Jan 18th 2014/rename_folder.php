<?php
session_start();
if($_SESSION['logged_in']==1){ ?>

	<!DOCTYPE HTML>
	<html>

	<head>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		<title>Not Logged In | Black Box</title>
	</head>
	
	<body>
		<section class="main">
			<h1><a href="http://ownbox.no-ip.biz">Black Box</a></h1>
			<form method="post" action="create_folder.php">
				<p>New folder name: <input type="text" name="new_dir"></p><br>
				<input type="submit">
			</form>
	</body>
	</html>
<? } else{
 ?>
	<!DOCTYPE HTML>
	<html>

	<head>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		<title>Not Logged In | Black Box</title>
	</head>

	<body>
		<section class="main">
			<h1><a href="http://ownbox.no-ip.biz">Black Box</a></h1>
			<p>You are not logged in.</p>
			<p class="signinorUp"><a href="http://ownbox.no-ip.biz/#signin">Sign In</a> or <a class="signupAgain" href="http://ownbox.no-ip.biz/">Sign Up</a></p>
		</section>
	</body>

	</html>
<?php
}
?>

