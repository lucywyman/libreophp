<?php
    function register($firstname, $lastname, $address, $city, $state, $zip, $email, $username, $password, $mysql_handle){
		//Because I'm too lazy to have actual encryption.
		$password = hash('md5', '$password');
		$cityquery = "INSERT INTO LibreoCities (cityid, city, state) VALUES (NULL, '$city', '$state') 
			ON DUPLICATE KEY UPDATE city='$city'";
		$result = mysql_query($cityquery, $mysql_handle);
		$userquery = "INSERT INTO LibreoUsers (userid, firstname, lastname, email, address, city, zip, username, password) VALUES 
			(NULL, '$firstname', '$lastname', '$email', '$address', (SELECT cityid FROM LibreoCities WHERE city='$city' AND state='$state'), '$zip', '$username', '$password')";
		$result2 = mysql_query($userquery, $mysql_handle);
		
		if($result == FALSE || $result2 == FALSE){
			session_destroy();
			$message= "$firstname $lastname tried to register as $username but couldn't!";
			$message= wordwrap($message, 70, "\n");
			mail("wymanl@onid.oregonstate.edu", "Libreo Failed Register", $message);
        }
		
		else{
			login($username, $password);
			$message="$firstname $lastname registered as $username";
			$message=wordwrap($message, 70, "\n");
			mail("wymanl@onid.oregonstate.edu", "Libreo Register", $message); 
		}
    }
?> 
