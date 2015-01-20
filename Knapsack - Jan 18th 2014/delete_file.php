<?php
session_start();
if($_SESSION['logged_in']==1){
	$filename = $_GET["file"]; 
	$filename = str_replace('%20', ' ', $filename);
	$file = "/var/www/Documents" . $filename;		
	unlink($file);
	header("Location: http://ownbox.no-ip.biz/user.php");
}else{
	echo "Not logged in";
}
?>
