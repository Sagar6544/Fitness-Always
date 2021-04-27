<?php
	//phpinfo();
	$dbhost = 'localhost';
	$dbuser = 'sagarthakur';
	$dbpass = 'sagar123';
	$dbname = 'fitnessalways';
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
	if ($conn->connect_error) {
		echo "Connection failed<br/>";
		die("Connection failed: " . $conn->connect_error);
	}
?>
