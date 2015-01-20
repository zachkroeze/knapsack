<?php
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
// Check to see if username already exists		
$username_test = 0;
$result = mysqli_query($con,"SELECT * FROM Persons");
while($row = mysqli_fetch_array($result)){
		   if($row['UserName'] == $_POST[username]){
		   $username_test = 1;
		   }	   
	}

if($username_test == 1){
	echo "Username already exists";} 
else {
	
	if($_POST[password1] == $_POST[password2] and $_POST[hexcode] == "1234abcd"){
		$sql="INSERT INTO Persons(UserName, Password) VALUES('$_POST[username]','$_POST[password1]')";
	} else {
		?>
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
							<p class="failedLogin">Invalid password or hexidecimal code.<br> <a href="http://ownbox.no-ip.biz/lost_password.php">Reset your password</a> or <a class="signupAgain" href="http://ownbox.no-ip.biz/#signin">Sign In</a></p>
		<?php
	}

	if (!mysqli_query($con,$sql)){ ?> 
		<p>Error: </p>
		</section>
		</body>
		</html>
	<?php
  		die(mysqli_error($con));
  	}else{
		header("Location: http://ownbox.no-ip.biz/");
	}
}
mysqli_close($con);
}
?>
