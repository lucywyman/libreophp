<?php
	session_start();
	include 'head.php';
	require_once 'db.php';

	if(!(isset($_SESSION['searchresults']))){
		echo "<h4>We're sorry!  There don't seem to be any results matching that search. Please try again.</h4>";
	}
	else{
		for($i=0; $i< count($_SESSION['searchresults']); $i++){
			echo "<p>Title: ".$_SESSION['searchresults'][$i]['title']."<br>"."Author: ".$_SESSION['searchresults'][$i]['author'];
		}
	}
	include 'foot.php';
?>
	
