<?php
session_start();
if($_SESSION['logged_in']==1){
	if ($_FILES["file"]["error"] > 0){
  		echo "Error: " . $_FILES["file"]["error"] . "<br>";
  	}

	$allowedExts = array("gif", "jpeg", "jpg", "png","pdf","zip","txt","mp3","mp4","avi","js","JPG","JPEG","mov","MOV", "iso", "ISO");
	$temp = explode(".", $_FILES["file"]["name"]);
	$extension = end($temp);
	
	if (($_FILES["file"]["size"] < 1000000000) && in_array($extension, $allowedExts)){
  	if ($_FILES["file"]["error"] > 0){
    			echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    	}
    if (file_exists("/var/www/Documents". $_SESSION['dir'] . "/"  . $_FILES["file"]["name"])){
      		echo $_FILES["file"]["name"] . " already exists. ";
    } else {
      	 move_uploaded_file($_FILES["file"]["tmp_name"],"/var/www/Documents". $_SESSION['dir'] . "/" . $_FILES["file"]["name"]);
			   header("Location: http://ownbox.no-ip.biz/user.php");
			   echo "/var/www/Documents". $_SESSION['dir'] . "/" . $_FILES["file"]["name"];
    }

    } else { 
  		echo "Invalid file";
  	}

} else {
	echo "Not logged in";
}
?>
