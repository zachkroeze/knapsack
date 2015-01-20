<?php
session_start();
if($_SESSION['logged_in']==1){
	$filename = $_GET["file"];
	$filename = str_replace('%20', ' ', $filename);
	$file = "/var/www/Documents/$filename";
	if (file_exists($file)) {
    		header('Content-Description: File Transfer');
    		header('Content-Type: application/octet-stream');
    		header('Content-Disposition: attachment; filename='.basename($file));
    		header('Content-Transfer-Encoding: binary');
    		header('Expires: 0');
    		header('Cache-Control: must-revalidate');
    		header('Pragma: public');
    		header('Content-Length: ' . filesize($file));
    		ob_clean();
    		flush();
    		readfile($file);
    		exit;
	}
}else{
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

