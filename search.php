<?php 
	session_start();
	require_once 'searchaction.php';
	require_once 'db.php';
	$db = db_connect();

	if(isset($_POST['search']) && strcmp($_POST['item'], "")!=0){
		$words=getLevenshtein($_POST['item']);
		search($words, $db);
	}
?>

	<form action='searchresults.php' name='searchbar' id='searchbar' method='post'>
		<input type='text' name='item' class='searchinput'>
		<input type='submit' name='search' value='Search' class='searchsubmit'>
	</form>

