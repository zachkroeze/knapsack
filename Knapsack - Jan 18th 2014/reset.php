<?php
$user="root";
$password="Ilafvm<3";
$db="users";
$con=mysqli_connect("localhost",$user,$password,$db);
if(!$con)
{
echo "could not connect" ;
}
else
{

// Check if it's a valid username
$username_test = 0;
$result = mysqli_query($con,"SELECT * FROM Persons");
while($row = mysqli_fetch_array($result)){
	   if($row['UserName'] == $_POST[username]){
	   $username_test = 1;
	   }	   
}

if($username_test == 1){

		  if($_POST[password1] == $_POST[password2] and $_POST[hexcode] == "1234abcd"){
		  		       mysqli_query($con,"UPDATE Persons SET Password = '$_POST[password1]' WHERE UserName = '$_POST[username]'");
		} else {
			echo "Invalid password or hexidecimal code";
			}
}else {
echo "Invalid Username";
}

mysqli_close($con);
header("Location: http://ownbox.no-ip.biz/");
}
?>