<?php
	if(!empty($_SESSION["basket"])){		
		$subTotal = 0;
		foreach($_SESSION["basket"] as $b_item){
			$itemId = $b_item["Item"]->ID;
			
			echo ("<p class ='items_name col-md-9 col-md-offset-1 pull-left'>".$b_item["quantity"]."x ".$b_item["Item"]->Name." &pound".($b_item["quantity"]*$b_item["Item"]->Price)."</p>")."<span onclick ='removeItem(".$itemId.")' class ='remove_items col-md-2 btn btn-danger glyphicon glyphicon-minus'></span>";
			
			echo "</br>";
			$subTotal += ($b_item["quantity"]*$b_item["Item"]->Price);
		}
		echo "<span class='col-md-12'><h3 class='col-md-12  text-right'>Subtotal &pound<span id ='total'>".$subTotal."</span></h3></span>";
		
		$method =$_GET["method"];
		if($method =="delivery" and $subTotal<12){
				
			echo "<a href='orderConfirmation.php'><p id = 'checkout' class='btn btn-primary col-md-10 col-md-offset-1 col-sm-12 col-xs-12' disabled ='disabled'>Secure Checkout</p></a><br/><br/><br/><br/>";
			echo"<p id ='minDelivery' class='col-md-10 col-md-offset-1 text-center'>You need to spend &pound12.00 or more to order for delivery!<p>";
		}
		
		else{
			echo "<a href='orderConfirmation.php'><p id = 'checkout' class='btn btn-primary col-md-10 col-md-offset-1 col-sm-12 col-xs-12'>Secure Checkout</p></a><br><br><br>";
			echo"<p id ='minDelivery'><p>";
		}
	}
				
?>