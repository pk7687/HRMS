<?php
	$dhost = 'localhost'; //localhost
	$uname = 'root'; //username of your database
	$pword = '12345 '; //password of your database
	$dbase = 'hrms'; //database name
	mysql_connect ($dhost,$uname,$pword) or die (mysql_error());
	mysql_select_db($dbase) or die (mysql_error());
?>
