<?php
	session_start();
	require_once 'common.php';
	
	if(isset($_SESSION['userid'])){
		unset($_SESSION['username']);
		unset($_SESSION['password']);
		unset($_SESSION['userid']);
	}
	$_SESSION = array();

	include 'head.php';
?>

<p class='logout'>Successfully logged out.</p>
