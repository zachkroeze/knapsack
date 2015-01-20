<?php
session_start();
if($_SESSION['logged_in']==1){
	$dir = "Documents" . $_SESSION['dir'] . "/". "$_POST[new_dir]";

	if (file_exists($dir)) {	?>
		<!DOCTYPE HTML>
		<html>

		<head>
			<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
			<link rel="stylesheet" type="text/css" href="css/main.css">
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
			<title>Folder Already Exists | Black Box</title>
		</head>

		<body>
			<section class="main">
				<h1><a href="http://ownbox.no-ip.biz">Black Box</a></h1>
				<p>The folder <?php echo $_POST[new_dir] ?> already exists. Click <a href='http://ownbox.no-ip.biz/rename_folder.php'>here</a> to try again</p>
				<p class="signinorUp"><a href="http://ownbox.no-ip.biz/#signin">Sign In</a> or <a class="signupAgain" href="http://ownbox.no-ip.biz/">Sign Up</a></p>
			</section>
		</body>

		</html>
	<?php
	} else {
    	mkdir($dir, 0777);
    	header("Location: http://ownbox.no-ip.biz/user.php");
	}
}else{ ?>
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
