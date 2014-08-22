<?php
	session_start();
	require_once 'db.php';
	require_once 'common.php';
	require_once 'addbookaction.php';
	$db = db_connect();

	if(!(isset($_SESSION['userid']))){
		header("Location: login.php");
	}
	$userid = $_SESSION['userid'];
	if(isset($_POST['submit'])){
		addbook($_POST['title'], $_POST['author'], $_POST['option'], $userid, $db);
	}
	include 'head.php';
?>

	<form class='Libreoform' action='<?php echo $_SERVER['PHP_SELF'];?>' method=post>
<h3>Add a book</h3>
	<div class='input'>
		<p>Title: </p>
		<input name='title' class='box' type='text' required=required size=30></input>
	</div> 
	<div class='input'>
		<p>Author: </p>
		<input name='author' class='box' type='text' required=required size=30></input>
	</div>
	<div class='input'>
		<input class='radio' name='option' type='radio' required=required size=30 value='Lend'><p class='radio'>Lend</p><br>
		<input class='radio' name='option' type='radio' required=required size=30 value='Give'><p class='radio'>Give</p><br>
		<input class='radio' name='option' type='radio' required=required size=30 value='Sell'><p class='radio'>Sell</p><br>
	</div><br>
		<input name='submit' type='submit' class='submit' value='Add book'>
</form>
