<?php
session_start();
if($_SESSION['logged_in']==1){
	$filename = $_GET["file"]; 
	$filename = str_replace('%20', ' ', $filename);
	$dirPath = "/var/www/Documents" . "/" .$_SESSION['dir']   . $filename;
	echo $dirPath;	
	foreach(new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dirPath, FilesystemIterator::SKIP_DOTS), RecursiveIteratorIterator::CHILD_FIRST) as $path) {
    $path->isFile() ? unlink($path->getPathname()) : rmdir($path->getPathname());
}
rmdir($dirPath);
header("Location: http://ownbox.no-ip.biz/user.php");
}else{
	echo "Not logged in";
}
?>
