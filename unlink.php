<?php
session_start();
if($_SESSION['logged_in']==1){
		rmdir("/var/www/Documents/TEST1");
		echo "It works";
}else{
	echo "Not logged in";
}
?>
