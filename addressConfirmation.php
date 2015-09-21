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
		<div class="col-md-6 col-md-offset-1">
			<div class="col-md-12">
				<h2 class="col-md-12 text-center">Confirm Address</h2>
				<label class="radio-inline col-md-3 col-md-offset-3 text-center">
					<input type="radio" checked="" name="optradio"/>Delivery
				</label>
				
				<label class="radio-inline col-md-3 text-center">
					<input type="radio" name="optradio"/>Collection
				</label>
				
				
				<div class="col-md-12">
					<h4 class="col-md-12"> Your Current address</h4>
					<hr class="col-md-12"/>
					
					<div class="col-md-6 top10 address_div">
						<label class="col-md-10 col-md-offset-2">Delivery Address</label>
						<select class="col-md-10 col-md-offset-1">
						 	<option value="volvo">
						 		<p>Flat A1301, Room D</p>
						 		<p>20 Duke Street</p>
						 	</option>
						 	
						 	<option value="volvo">
						 		<p>Flat A1301, Room D</p>
						 		<p>20 Duke Street</p>
						 	</option>
						 	
						 	<option value="volvo">
						 		<p>Flat A1301, Room D</p>
						 		<p>20 Duke Street</p>
						 	</option>
						 	
						 	<option value="volvo">
						 		<p>Flat A1301, Room D</p>
						 		<p>20 Duke Street</p>
						 	</option>
						 	
						 	<option value="volvo">
						 		<p>ADD NEW ADDRESS...</p>
						 	</option>
						</select>
						<div class="col-md-12 top10 address_div">
							<p>Flat A1301, Room D</p>
							<p>20 Duke Street</p>
							<p>Southampton</p>
							<p>Hampshire</p>
							<p>SO14 3ET</p>
						</div>
					</div>
					
					
					
					<div class="col-md-6 top10 address_div">
						<label class="col-md-10 col-md-offset-2">Delivery Time</label>
						<select class="col-md-10 col-md-offset-1">
						 	<option value="volvo">
						 		<p>ASAP</p>
						 	</option>
						 	
						 	<option value="volvo">
						 		<p>17:00</p>
						 	</option>
						 	
						 	<option value="volvo">
						 		<p>17:05</p>
						 	</option>
						 	
						 	<option value="volvo">
						 		<p>17:10</p>
						 	</option>
						 	
						 	<option value="volvo">
						 		<p>17:15</p>
						 	</option>
						 	
						 	<option value="volvo">
						 		<p>17:20</p>
						 	</option>
						 	
						 	<option value="volvo">
						 		<p>17:25</p>
						 	</option>
						 	
						 	<option value="volvo">
						 		<p>17:30</p>
						 	</option>
						</select>
						<div class="col-md-12 text-center top10 address_div">
							<p>Your Selected Time</p>
							<p>17.25</p>
						</div>
					</div>
  				</div>
  			
  				<a href="paymentConfirmation.php"><button class="col-md-8 col-md-offset-2 btn btn-danger top10">Continue to Payment </button></a>
			</div>
			<!--	
			<form action="#">
				<div class="form-group col-md-12  col-sm-6 col-xs-12">
					<h4 class="col-md-12">Add a new address</h4>
					<hr class="col-md-12"/>
					<h5>House name / Door no*</h5>
					<input type="email" class="form-control text-capitalize">
						
					<div class="form-group col-md-14  col-sm-14 col-xs-14">
						<h5>Street name*</h5>
						<input type="email" class="form-control text-capitalize">
					</div>
			  	</div>
			  		
			  	<div class="form-group col-md-12 col-sm-6 col-xs-12">
					<h5>Town Name*</h5>
					<input type="email" class="form-control text-capitalize">
						
					<div class="form-group col-md-14 col-sm-14 col-xs-14">
						<h5>Country Name</h5>
						<input type="email" class="form-control text-capitalize">
					</div>
			  	</div>
			  		
			  	<div class="form-group col-md-12 col-sm-6 col-xs-12">
					<h5>POSTCODE*</h5>
					<input type="email" class="form-control text-uppercase">
						
			  	</div>
			  	<a href="#"><button class="col-md-8 col-md-offset-2 btn btn-info top10 margin-bottom">Update</button></a>
			</form>	
			-->
	</div>
		
	<?php
		include_once 'partials/user_menu.php';
	?>
	</div>	
</div>
	
	
	
<?php
	
	include_once 'includes/footer.php';
?>