<?php
	require_once 'db.php';

	function alert($text){
    	$_POST['alerts'] = $text;
		if(isset($_POST['alerts'])){
			echo "<p>", $_POST['alerts'], "</p>";
		}
	}
	//TODO Format user -input text
?>
