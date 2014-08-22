<?php
	require_once 'common.php';
    require_once 'db.php';

	function login($username, $password, $db){
		$pw=hash('md5', '$password');
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $pw;
    
        $get_user = "SELECT * FROM LibreoUsers WHERE username='$username' AND password='$pw'";
        $result = mysql_query($get_user, $db);
		if (!$result){
			//mail('wymanl@onid.oregonstate.edu', 'Login fail', "Failed to login");
            alert("Your user does not exist! Please try again.");
            unset($_SESSION['username']);
			unset($_SESSION['password']);
			session_destroy();
			header('Location: error.php');
        }
		else{
			//mail('wymanl@onid.oregonstate.edu', 'Login success', 'Login success!');
            $row = mysql_fetch_array($result);
            $_SESSION['userid'] = $row['userid'];
			header("Location: index.php");
        }
	}   
?>
