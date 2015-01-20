<?php
session_start();
if($_SESSION['logged_in']==1){
	$_SESSION['dir']=$_SESSION['dir'] . $_GET["folder"];
	header("Location: http://ownbox.no-ip.biz/user.php");
} else{
	echo "Not logged in";
}
?>
