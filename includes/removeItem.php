<?php
	header("Content-Type: text/xml");
	echo "<?xml version ='1.0' encoding = 'UTF-8' standalone = 'yes' ?>";
	
	echo '<response>';
	
		session_start();
		$id = $_GET["id"];
		
		if(isset($_SESSION["basket"]) && empty($_SESSION["basket"]) ==false){
			
			$subTotal = 0;
			for($i = 0; $i<count($_SESSION["basket"]); $i++){
				if($_SESSION["basket"][$i]["Item"]->ID ==$id){
							
					if($_SESSION["basket"][$i]["quantity"] < 2){
								
						unset($_SESSION["basket"][$i]);
						$_SESSION["basket"] = array_values($_SESSION["basket"]);
					}
					else{
								
						$_SESSION["basket"][$i]["quantity"]--;
					}
				}
			}
			
			include("../partials/iterateBasket.php");
		}
		
		
		else{
			
			echo "Ooops Something went Wrong";
		}

	echo '</response>';
?>