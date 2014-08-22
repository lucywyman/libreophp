<?php
	session_start();
	$pagetitle = 'Register';
	require_once 'db.php';
	require_once 'common.php';
	require_once 'registeraction.php';
	include 'head.php';

	$db = db_connect();

	if(isset($_POST['register'])){
			if(strcmp($_POST['password'], $_POST['password2']) == 0){
				register($_POST['firstname'], $_POST['lastname'], $_POST['address'], $_POST['city'], $_POST['state'], $_POST['zip'], $_POST['email'], $_POST['username'], $_POST['password'], $db);	
			}	
			else{
				alert("Your passwords didn't match.");
			}
	}
?>

	<form method=post action='<?php echo $_SERVER['PHP_SELF'];?>' class='Libreoform'>
	<h3>Sign up!</h3>
	<div class='input'>
		<p>First name: </p>
		<input type=text name='firstname' required=required class='box' size=40 placeholder="Ok. Step one.">
	</div>
	<div class='input'>
		<p>Last name: </p>
		<input type=text name='lastname' required=required class='box' size=40 placeholder="So far, so good">
	</div>	
	<div class='input'>
		<p>Address: </p>
		<input type=text name='address' required=required class='box' size=40 placeholder="Man, this actually pretty easy">
	</div>
	<div class='input'>
		<p>City: </p>
		<input type=text name='city' required=required class='box' size=40 placeholder="Wait, where do I live again?">
	</div>	
	<div class='input'>
		<p>State: </p>
		<select name='state' required=required class='box' size=1>
			<option value='Alabama'>Alabama</option>
			<option value='Alaska'>Alaska</option>
			<option value='Arizona'>Arizona</option>
			<option value='Arkansas'>Arkansas</option>
			<option value='California'>California</option>
			<option value='Colorado'>Colorado</option>
			<option value='Connecticut'>Connecticut</option>
			<option value='Delaware'>Delaware</option>
			<option value='Florida'>Florida</option>
			<option value='Georgia'>Georgia</option>
			<option value='Hawaii'>Hawaii</option>
			<option value='Idaho'>Idaho</option>
			<option value='Illinois'>Illinois</option>
			<option value='Indiana'>Indiana</option>
			<option value='Iowa'>Iowa</option>
			<option value='Kansas'>Kansas</option>
			<option value='Kentucky'>Kentucky</option>
			<option value='Louisiana'>Louisiana</option>
			<option value='Maine'>Maine</option>
			<option value='Maryland'>Maryland</option>
			<option value='Massachusetts'>Massachusetts</option>
			<option value='Michigan'>Michigan</option>
			<option value='Minnesota'>Minnesota</option>
			<option value='Mississippi'>Mississippi</option>
			<option value='Missouri'>Missouri</option>
			<option value='Montana'>Montana</option>
			<option value='Nebraska'>Nebraska</option>
			<option value='Nevada'>Nevada</option>
			<option value='New Hampshire'>New Hampshire</option>
			<option value='New Jersey'>New Jersey</option>
			<option value='New Mexico'>New Mexico</option>
			<option value='New York'>New York</option>
			<option value='North Carolina'>North Carolina</option>
			<option value='North Dakota'>North Dakota</option>
			<option value='Ohio'>Ohio</option>
			<option value='Oklahoma'>Oklahoma</option>
			<option value='Oregon'>Oregon</option>
			<option value='Pennsylvania'>Pennsylvania</option>
			<option value='Rhode Island'>Rhode Island</option>
			<option value='South Carolina'>South Carolina</option>
			<option value='South Dakota'>South Dakota</option>
			<option value='Tennessee'>Tennessee</option>
			<option value='Texas'>Texas</option>
			<option value='Utah'>Utah</option>
			<option value='Vermont'>Vermont</option>
			<option value='Virginia'>Virginia</option>
			<option value='Washington'>Washington</option>
			<option value='West Virginia'>West Virginia</option>
			<option value='Wisconsin'>Wisconsin</option>
			<option value='Wyoming'>Wyoming</option>
		</select>
	</div>
	<div class='input'>
		<p>Zip code: </p>
		<input type=text name='zip' required=required class='box' size=40 placeholder="Oh no! I'm losing it!">
	</div>
	<div class='input'>
		<p>Email: </p>
		<input type=text name='email' required=required class='box' size=40 placeholder="ABORT ABORT ABORT">
	</div>
	<div class='input'>
		<p>Username: </p>
		<input type=text name='username' required=required class='box' size=40 placeholder="How should I know???">
	</div>
	<div class='input'>
		<p>Password: </p>
		<p id='warningtext'>WARNING: This is site has a very thin veneer of security. Think before you type, friends.</p>
		<input type=password name='password' required=required class='box' size=40 placeholder="Ok.  Deep breaths. In, out.">
	</div>
	<div class='input'>
		<p>Please retype your password: </p>
		<input type=password name='password2' required=required class='box' size=40 placeholder="So close...">
	</div>
	<input class='submit' type=submit name='register' value="Register">
</form>
<?php include 'foot.php'; ?>
