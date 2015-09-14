<?php
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
		$category_id = $_POST["category"];		
		header("location: order_online.php?category=$category_id");
	}
		
?>