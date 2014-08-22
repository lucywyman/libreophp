<?php
	require_once 'bookinfo.php';
	require_once 'common.php';

	function books_owned ($userid, $db){
		if($userid == NULL){
			return "";
		}
		$query = "SELECT title, genre FROM LibreoBookstoUsers WHERE userid=$userid ORDER BY title";
		$result = mysql_query($query, $db);
		return $result;
	}

	function user_info ($userid, $db){
		if($userid == NULL){
			return "";
		}
		$query = "SELECT * FROM LibreoUsers WHERE userid=$userid";
		$result = mysql_query($query, $db);
		if(!$result){
			alert("Something has gone wrong!");
			header("Location: error.php");
		}
		$info = mysql_fetch_array($result);
		return $info;
	}

?>
		
