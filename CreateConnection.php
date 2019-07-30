<?php 
	$servername = "db4free.net";
	$port = "3306";
	$username = "longpdgch17143";
	$password = "phamduclong99";
	$dbname = "longpdgch17143";

	
	$conn = new mysqli($servername . ":". $port , $username, 
		$password, $dbname);
	
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	}	 

	echo "done";

 ?>