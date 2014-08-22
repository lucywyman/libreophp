<?php 
	session_start();
	$page='Login'; 
	require_once 'db.php';
	require_once 'common.php';
	require_once 'loginaction.php';
	$db = db_connect();

	if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['submitbutton'])){
		login($_POST['username'], $_POST['password'], $db);
}
	include 'head.php'; 
?>
	<form method=post action='<?php echo $_SERVER['PHP_SELF'];?>' class='Libreoform'>
	<h3>Login</h3>
    <div class=input>
        <p>Username:  </p>
        <input type=text name=username required=required class='box' size=30>
     </div>
     <div class=input>
        <p>Password:  </p>
        <input type=password name=password required=required class='box' size=30>
     </div>  
    <input class='submit' type=submit name='submitbutton' value="Login">
</form> 

<?php include 'foot.php'; ?>
