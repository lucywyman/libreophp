<?php
	function addbook($title, $author, $option, $userid, $mysql_handle){
		//Format user input
		//
		
		$authorquery = "INSERT INTO LibreoAuthors (authorid, authorname) VALUES (NULL, '$author')
			ON DUPLICATE KEY UPDATE authorname='$author'";
		$result = mysql_query($authorquery, $mysql_handle);
		
		$bookquery = "INSERT INTO LibreoBooks (bookid, title, author) VALUES (NULL, '$title', (SELECT authorid FROM LibreoAuthors WHERE authorname='$author'))
			ON DUPLICATE KEY UPDATE title='$title'";
		$result2 = mysql_query($bookquery, $mysql_handle);
		
		$usertable = "INSERT INTO LibreoBookstoUsers VALUES ($userid, (SELECT bookid FROM LibreoBooks WHERE title='$title'), '$option')";
		$result3 = mysql_query($usertable, $mysql_handle);
		
		$citytable = "INSERT INTO LibreoBookstoCities (cityid, bookid) VALUES ((SELECT city FROM LibreoUsers WHERE userid='$userid'), (SELECT bookid FROM LibreoBooks WHERE title='$title'))";
		$result4 = mysql_query($citytable, $mysql_handle);
		
		if($result == FALSE || $result2 == FALSE || $result3 == FALSE || $result4 == FALSE){
			
		}
	}
?>
