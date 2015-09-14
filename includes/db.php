<?php

// database credentials linuxproj
$dbHost		 = 'linuxproj.ecs.soton.ac.uk';
$dbUsername	 = 'za2e13';
$dbPassword	 = 'ITOCourse1';
$dbSchema	 = 'db_za2e13';

// database credentials localhost
//$dbHost		 = 'localhost';
//$dbUsername	 = 'root';
//$dbPassword	 = 'root';
//$dbSchema	 = 'db_za2e13';

$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbSchema);

// check if the database connection failed
if($conn->connect_errno){
	echo "Failed to connect to MySQL: " . $conn->connect_error;
}

?>