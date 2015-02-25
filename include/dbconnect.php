<?php
	// MySQL authentication
	$servername = "mysql.boxhost.me";
	$dbname = "u158431052_jsv";
	$dbusername = "u158431052_jsv";
	$dbpassword = "dBhXAChy6M";
	
	// Connect to the database
	$dbconnect = new mysqli($servername, $dbusername, $dbpassword, $dbname);
	
	// Check connection
	if ($dbconnect->connect_error) {
		die("Connection failed: " . $dbconnect->connect_error);
	}
?>