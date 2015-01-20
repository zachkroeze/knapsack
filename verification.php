<?php 

session_start();

$user="root";
$password="Ilafvm<3";
$db="users";
$con=mysqli_connect("localhost",$user,$password,$db);
if(!$con)
{
?>
<!DOCTYPE HTML>
<html>
	<head>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		<title>No Connection | Black Box</title>
	</head>
	<body>
		<section class="main">
				<h1><a href="http://ownbox.no-ip.biz/">Black Box</a></h1>
				<p class="failedLogin">Could not connect.<br> <a href="http://ownbox.no-ip.biz/#signin">Sign In</a> or <a class="signupAgain" href="http://ownbox.no-ip.biz/">Sign Up</a></p>
		</section>
	</body>
</html>
<?php
}
else
{
$result = mysqli_query($con,"SELECT * FROM Persons");

// Check if it's a valid username
$username_test = 0;

while($row = mysqli_fetch_array($result)){
	   if($row['UserName'] == $_POST[username]){
	   $username_test = 1;
	   }	   
}

// Check if password matches username
if($username_test == 1){
		  $result = mysqli_query($con,"SELECT Password FROM Persons WHERE UserName = '$_POST[username]'");
		  $row = mysqli_fetch_array($result);
		  if($row[0] == $_POST[password]){
				$_SESSION['logged_in']=1;
		  	    header("Location: http://ownbox.no-ip.biz/user.php");
		  } else{ ?>
				<!DOCTYPE HTML>
				<html>
					<head>
						<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
						<link rel="stylesheet" type="text/css" href="css/main.css">
						<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
						<title>Failed Login | Black Box</title>
					</head>
					<body>
						<section class="main">
								<h1><a href="http://ownbox.no-ip.biz/">Black Box</a></h1>
								<p class="failedLogin">Incorrect username or password.<br> <a href="http://ownbox.no-ip.biz/lost_password">Reset your password</a> or <a class="signupAgain" href="http://ownbox.no-ip.biz/#signin">sign in</a></p>
						</section>
					</body>
				</html>
			<?php
		  }

}else { ?>
<!DOCTYPE HTML>
<html>
	<head>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		<title>Failed Login | Black Box</title>
	</head>
	<body>
		<section class="main">
				<h1><a href="http://ownbox.no-ip.biz/">Black Box</a></h1>
				<p class="failedLogin">Incorrect username or password.<br> <a href="http://ownbox.no-ip.biz/lost_password.php">Reset your password</a> or <a class="signupAgain" href="http://ownbox.no-ip.biz/#signin">sign in</a></p>
		</section>
	</body>
</html>
<?php
}



mysqli_close($con);
}
?>
