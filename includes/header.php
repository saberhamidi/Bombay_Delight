<?php
	// this code move active class between page tabs 
	$title = basename($_SERVER['PHP_SELF']);
	
?>
<!DOCTYPE html>
<html>
	
	<head>
		<!-- links all teh relevent pages into one page, so if i need to update that all will be only onece-->
		<title><?php if($title=='index.php'){echo 'Home';} elseif($title=='about_us.php'){echo 'About Us';} elseif($title=='order_online.php'){echo 'Order Online';}elseif($title=='contact.php'){echo 'Contact Page';}?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css.map">	
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script type = "text/javascript" src="js/bootstrap.min.js"></script>
		<script type = "text/javascript" src="js/myScript.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
		
		
	</head>
	
	<body <?php if($title == 'order_online.php') echo("onload='process(1001)'");?>>
	<div class="container col-md-12">
		<?php 
			include_once 'includes/menu.php';
		?>
	</div>
	