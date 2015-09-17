<?php
	
	session_start();
	
	if(isset($_SESSION["loggedIn"]) and $_SESSION["loggedIn"] == true){
		
		unset($_SESSION["loggedIn"]);
		unset($_SESSION["username"]);
		unset($_SESSION["password"]);
	}
	
	header("location: sign_in.php");
?>