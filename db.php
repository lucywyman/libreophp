<?php
    function db_connect(){
        $db_host = 'oniddb.cws.oregonstate.edu';
        $db_name = 'wymanl-db';
        $db_user = 'wymanl-db';
        $db_password = 'RNTujKZ36crFXyQV';
        $mysql_handle = mysql_connect($db_host, $db_user, $db_password)
            or die("Error connecting to database server");
        mysql_select_db($db_name, $mysql_handle)
			or die("Error selecting database $dbname");
        return $mysql_handle;
    }
?>
