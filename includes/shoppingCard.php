<?php
	header("Content-Type: text/xml");
	echo "<?xml version ='1.0' encoding = 'UTF-8' standalone = 'yes' ?>";
	
	echo '<response>';
session_start();
		$id = $_GET["id"];
		
		if($id != 1001){
			require 'db.php';
			$items = $conn->query("SELECT* FROM Item WHERE ID = $id");
					while($item = $items->fetch_object()){
								
								if(!isset($_SESSION["basket"])){
									
									$_SESSION["basket"] = array(); 
								}
								
								if(empty($_SESSION["basket"])){
									
									array_push($_SESSION["basket"], array("Item"=>$item, "quantity"=>1));
								}
								
								else{
									$found = false;
									for($i = 0; $i<count($_SESSION["basket"]); $i++){
										
										if($_SESSION["basket"][$i]["Item"]->ID == $id){
											$_SESSION["basket"][$i]["quantity"]++;
											$found = true;
											break;	
										}
									}
									
									if(!$found){
										
										array_push($_SESSION["basket"], array("Item"=>$item, "quantity"=>1));
									}
									
								}
								//echo "<p>".$quantity."x".$item->Name."</p>";
								//echo "<span class ='btn btn-danger glyphicon glyphicon-minus'></span>";
								//echo "<h3>Subtotal £".$quantity*$item->Price."</h3>";
					}
				}
											
				if(isset($_SESSION["basket"]) && empty($_SESSION["basket"]) ==false){
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
				
	//$_SESSION = array();
	//session_destroy();
	
echo '</response>';
?>