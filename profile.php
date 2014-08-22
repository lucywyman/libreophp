<?php 
	session_start();
	require_once 'db.php';
	require_once 'common.php';
	require_once 'profileaction.php';
	include 'head.php';
	$db = db_connect();

	if(!(isset($_SESSION['userid']))){
		header("Location: login.php");
		die();
	}
	$user = user_info($_SESSION['userid'], $db);
	$cityid = $user['city'];
	$cityquery = "SELECT * FROM LibreoCities WHERE cityid='$cityid'";
	$result = mysql_query($cityquery, $db);
	$city = mysql_fetch_array($result);
?>

<div id='profile'>
	<!--TODO add profile picture option-->
	<h3><?php echo $user['firstname'].' '.$user['lastname'];?></h3>
	<p>City: <?php echo $city['city'].', '.$city['state'];?></p>
	<p>Username: <?php echo $user['username'];?></p>
	<h3><?php echo $user['username'].'\'s Library';?></h3>
	<!--TODO add update info-->
</div>

<? include 'foot.php';?>
