<?php
	session_start();
	
	if($_SESSION["loggedIn"] !=true){
		header("location: sign_in.php?page=basket");
	}
	
	include_once 'includes/header.php';
	include 'includes/db.php';
?>




<div class="container margin-bottom ">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-5 basket">
			<h2 class="col-md-12 text-center">Order Confirmation</h2>
			<?php
				if(!empty($_SESSION["basket"])){		
				$subTotal = 0;
				foreach($_SESSION["basket"] as $b_item){
					$itemId = $b_item["Item"]->ID;
					echo ("<li class='col-md-11 col-md-offset-1 top5'><span class='top5 col-md-1'>".$b_item["quantity"]."x </span><span class='top5 col-md-8'>".$b_item["Item"]->Name."</span><span class='col-md-3 top5'> &pound".($b_item["quantity"]*$b_item["Item"]->Price)."</span></li>");
					echo "</br>";
					$subTotal += ($b_item["quantity"]*$b_item["Item"]->Price);
				}
				echo "<h2 class='col-md-8 text-center col-md-offset-2 pull-right'>Subtotal &pound".$subTotal."</h2>";
				}
				else{
					echo "<p class='col-md-10 col-md-offset-4'>You have no items added in your basket!</p>";
				}	
			?>
			
			<div class="col-md-6 col-md-offset-5 basket">
				<a href="addressConfirmation.php"><button class="col-md-12 btn btn-danger top10">Proceed to Checkout</button></a>
			
				<a href="order_online.php"><h4 class="col-md-12 col-md-offset-2  top10">Change Order</h4></a>
			</div>
			
		</div>
		<div class="col-md-7">
			<?php
				
				include_once 'partials/user_menu.php';
			?>
		</div>
	</div>	
</div>
	
	
	
<?php
	
	include_once 'includes/footer.php';
?>