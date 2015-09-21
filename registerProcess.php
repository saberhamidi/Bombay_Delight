<?php
	include("includes/db.php");
	
	//session included to record the user detail through the whole pages when the user is loged in.
	session_start();
	
	//Comture and validate the user input
	$firstName = $lastName= $email= $password = $telephon = $dorNumber = $streetName= $town= $postcode = ""; 
	$validate = true;
	$error;
	
	//check if the user input is empty
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
		$firstName = test_input($_POST["Fname"]);
		$lastName = test_input($_POST["Lname"]);
		$email = test_input($_POST["email"]);
		$password = test_input($_POST["password"]);
		$telephon = test_input($_POST["tel"]);
		$dorNumber =test_input($_POST["house"]);
		$streetName = test_input($_POST["street"]);
		$town = test_input($_POST["town"]);
		$postcode = test_input($_POST["post"]);
			
		if (!preg_match("/^[a-zA-Z0-9 ]*$/",$firstName) or !preg_match("/^[a-zA-Z0-9 ]*$/",$lastName) or !preg_match("/^[@a-zA-Z0-9._-]*$/",$email) or !preg_match("/^[a-zA-Z0-9 ]*$/",$password) or !preg_match("/^[a-zA-Z0-9 ]*$/",$telephon) or !preg_match("/^[a-zA-Z0-9 ]*$/",$dorNumber) or !preg_match("/^[a-zA-Z0-9 ]*$/",$streetName) or !preg_match("/^[a-zA-Z0-9 ]*$/",$town) or !preg_match("/^[a-zA-Z0-9 ]*$/",$postcode)) {
			$validate =false;
			$error =1;
			header("location: register.php?error=$error");
		}
		
		elseif($conn->query("SELECT email FROM user WHERE email == $email") >= 1){

			$validate =false;
			$error =2;
			header("location: register.php?error=$error");
		}
		else{
			$conn->query("INSERT INTO user (firstname, surename, email, password, tel) VALUES('$firstName','$lastName','$email','$password','$telephon')");
			$conn->query("INSERT INTO address (door_no, street_name, town_name, postcode, user_id) VALUES('$dorNumber','$streetName','$town','$postcode','$email')");
			
			$_SESSION["username"] = $email;
			$_SESSION["password"] = $password;
			$_SESSION["loggedIn"] = true;
			
			header("location: dashBoard.php");
		}
	}

	
	//trims any whitle space and stripslashes the user input contains, and return the user trimed data
	function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>