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
			if(!empty($_SESSION["basket"])){		
				$subTotal = 0;
				foreach($_SESSION["basket"] as $b_item){
					$itemId = $b_item["Item"]->ID;
					echo ("<p>".$b_item["quantity"]."x ".$b_item["Item"]->Name." £".($b_item["quantity"]*$b_item["Item"]->Price)."</p>");
					echo "<span onclick ='removeItem(".$itemId.")' class ='btn btn-danger glyphicon glyphicon-minus'></span>";
					echo "</br>";
					$subTotal += ($b_item["quantity"]*$b_item["Item"]->Price);
				}
				echo "<h3>Subtotal £".$subTotal."</h3>";
			}
		}
		
		
		else{
			
			echo "Ooops Something went Wrong";
		}

	echo '</response>';
?>