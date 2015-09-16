<?php
	if(!empty($_SESSION["basket"])){		
		$subTotal = 0;
		foreach($_SESSION["basket"] as $b_item){
			$itemId = $b_item["Item"]->ID;
			echo ("<p>".$b_item["quantity"]."x ".$b_item["Item"]->Name." &pound".($b_item["quantity"]*$b_item["Item"]->Price)."</p>");
			echo "<span onclick ='removeItem(".$itemId.")' class ='btn btn-danger glyphicon glyphicon-minus'></span>";
			echo "</br>";
			$subTotal += ($b_item["quantity"]*$b_item["Item"]->Price);
		}
		echo "<h3>Subtotal &pound".$subTotal."</h3>";
	}
			
?>