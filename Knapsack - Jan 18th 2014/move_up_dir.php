<?php
session_start();
if($_SESSION['logged_in']==1){
	$pos = strpos(strrev($_SESSION['dir']), '/') + 1;
	$_SESSION['dir']=strrev(substr(strrev($_SESSION['dir']),$pos));
	header("Location: http://ownbox.no-ip.biz/user.php");
} else{
	echo "Not logged in";
}
?>
