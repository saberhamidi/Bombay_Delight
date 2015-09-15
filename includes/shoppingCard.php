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

					}
			}
											
		include("../partials/iterateBasket.php");
	
	echo '</response>';
?>