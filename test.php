<?php
	
	session_start();
$user_id = $_SESSION["username"]; 
include "includes/db.php"; 
$categorys = $conn->query("SELECT firstname FROM user WHERE email = '$user_id'");

echo "<pre>";
print_r($categorys);
echo "</pre>";

echo $categorys->fetch_object()->firstname;

?>