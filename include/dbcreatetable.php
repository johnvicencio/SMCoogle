<?php
	// Create table
	$tablename = "searchengine";
	$querycreatetable = "CREATE TABLE $tablename (		   
				id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
				pageurl VARCHAR(255) NOT NULL,
				pagecontent TEXT NOT NULL,
				reg_date TIMESTAMP
				)";
	if ($dbconnect->query($querycreatetable) === TRUE) {
		if ($dbconnect->query("DESCRIBE TABLE $tablename") === FALSE) {
			echo "Table $tablename created successfully";
		}
		else {
			echo "Error creating table: " . $dbconnect->error;
		}
	} 
?>