<?php 
	$server= "localhost";
	$user= "root";
	$password= "mahi1506";
	$db="store";
	mysql_connect($server, $user, $password) or die("sorry cannot connect to mysql");
	mysql_select_db($db) or die("Sorry can't select the database ");
?>
