<?php
	session_start();
	
	if($_SESSION["loggedIn"] !=true){
		header("location: sign_in.php?page=basket");
	}
	
	include_once 'includes/header.php';
	include_once 'includes/db.php';
?>




<div class="container margin-bottom">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-5">
			<div class="col-md-12">
				<h3 class="col-md-12 text-center">Payment</h3>
				<label class="radio-inline col-md-3 col-md-offset-2">
					<input type="radio" name="optradio"> Cash
				</label>
								
				<label class="radio-inline col-md-6 col-md-offset-1">
					<input type="radio" name="optradio">Card
				</label>
							
				<a href="sucessful_order.php"><button class="col-md-8 col-md-offset-2 btn btn-danger margin-bottom top10">Place your order</button></a>
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