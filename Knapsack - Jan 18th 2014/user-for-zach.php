<?php
session_start();
if($_SESSION['logged_in']==1){ ?>
<!DOCTYPE HTML>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/main.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="js/main.js"></script>
<title>Into The Black Box</title>
</head>

<body>
<section class="main">
		<form class="logOut" action="http://ownbox.no-ip.biz/logout.php" method="post">
			<input class="plainButton logOut" type="submit" name="submit" value="Log out">
		</form>
		<h1 class="mainTitle"><a href="http://ownbox.no-ip.biz/user.php">Black Box</a></h1>
	<?php
	$location = '/var/www/Documents' . $_SESSION['dir'];
	$myDirectory = opendir($location);
	while($entryName = readdir($myDirectory)) {
		$dirArray[] = $entryName;
	}
	closedir($myDirectory);
	$indexCount	= count($dirArray);
	sort($dirArray); ?>

	<table cellpadding=5 cellspacing=0 class='documentTable'>
	<?php
	$indexCount2 = 0;
	for($index=0; $index < $indexCount; $index++) {
		if (substr("$dirArray[$index]", 0, 1) != "."){
			$indexCount2 = $indexCount2 + 1;
		}
	}
	if ($indexCount2 < 2 && $indexCount2 != 0){ ?>
		<span><?php echo $indexCount2 ?> files</span> <?php
	}
	else{ ?>
		<span><?php echo $indexCount2 ?> files</span> <?php
	}

	$free_space = disk_free_space("/");
	$free_space = number_format($free_space * 9.31323 * 1 / 10000000000, 2);	
	echo "<span>&#8594; $free_space GB of free space</span>";	

	if($location != '/var/www/Documents'){
	echo "<p><a href='http://ownbox.no-ip.biz/move_up_dir.php'>Go up a directory</a></p>";
	}

	for($index=0; $index < $indexCount; $index++) {
		if (substr("$dirArray[$index]", 0, 1) != "." and !is_dir("Documents" . $_SESSION['dir'] . "/" . $dirArray[$index]) ){
			$dirArray2 = str_replace(' ', '%20', $dirArray[$index]); ?>
			<tr><td class="fileName"><a target='blank' href= 'http://ownbox.no-ip.biz/Documents
			<?php $dirArray2 = $_SESSION['dir']."/". $dirArray2; echo $dirArray2 ?>'><?php echo $dirArray[$index] ?></a></td>
			<td><a href='http://ownbox.no-ip.biz/download_file.php?file=
			<?php echo $dirArray2 ?>'>&#8595;</a></td>
 			<td><a href='http://ownbox.no-ip.biz/delete_file.php?file=
			<?php echo $dirArray2 ?>'><span class="deleteX">X</span></td>
			</tr> <?php
		}elseif(substr("$dirArray[$index]", 0, 1) != "."){
			$dirArray2 = str_replace(' ', '%20', $dirArray[$index]); ?>
			<tr><td class="fileName"><a href= 'http://ownbox.no-ip.biz/move_down_dir.php?folder=
			<?php $folder= "/" . $dirArray2 ; 
			echo $folder ?>'><?php echo $dirArray[$index] ?></a></td>
			<td><a href='http://ownbox.no-ip.biz/download_folder.php?file=
			<?php echo $dirArray2 ?>'>&#8595;</a></td>
			<td><a href='http://ownbox.no-ip.biz/delete_file.php?file=
			<?php echo $dirArray2 ?>'><span class="deleteX">X</span></a></td>
			</tr> <?php 
		}
	}
	?>
	</table>
	<form action="http://ownbox.no-ip.biz/dynamic_rename_folder.php" method="post">
		<input class="plainButton" type="submit" name="submit" value="New Folder +">
	</form>
	<form class="newUpload" action="http://ownbox.no-ip.biz/upload_file.php" method="post" enctype="multipart/form-data">
		<input class="chooseFile" type="file" name="file" id="file" multiple>
		<button class="fileSelect" type="button">Select Files</button>
		<br>
		<input type="submit" name="submit" value="&#8593; Upload">
	</form>
</section>

</body>
</html>

<? } else{
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
					<p class="failedLogin">Not logged in.<br> <a class="signupAgain" href="http://ownbox.no-ip.biz/#signin">Sign in</a></p>
			</section>
		</body>
	</html>
	<?php
}
?>
