<?php
	
	include_once 'includes/header.php';
	include_once 'includes/db.php';
?>




<div class="container">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="col-md-4">
			<h3 class="col-md-12 text-center">Order Confirm</h3>
			<span class="col-md-2">23</span><span class="col-md-8"> This is the order </span><span class="col-md-2">£2.95</span>
			<span class="col-md-2">23</span><span class="col-md-8"> This is the order </span><span class="col-md-2">£2.95</span>
			<span class="col-md-2">23</span><span class="col-md-8"> This is the order </span><span class="col-md-2">£2.95</span>
			<span class="col-md-2">23</span><span class="col-md-8"> This is the order </span><span class="col-md-2">£2.95</span>
			<span class="col-md-2">23</span><span class="col-md-8"> This is the order </span><span class="col-md-2">£2.95</span>
			<span class="col-md-2">23</span><span class="col-md-8"> This is the order </span><span class="col-md-2">£2.95</span>
			<span class="col-md-2">23</span><span class="col-md-8"> This is the order </span><span class="col-md-2">£2.95</span>
			<span class="col-md-2">23</span><span class="col-md-8"> This is the order </span><span class="col-md-2">£2.95</span>
			<span class="col-md-2">23</span><span class="col-md-8"> This is the order </span><span class="col-md-2">£2.95</span>
			<span class="col-md-2">23</span><span class="col-md-8"> This is the order </span><span class="col-md-2">£2.95</span>
			<span class="col-md-2">23</span><span class="col-md-8"> This is the order </span><span class="col-md-2">£2.95</span>
			<span class="col-md-2">23</span><span class="col-md-8"> This is the order </span><span class="col-md-2">£2.95</span>
			<span class="col-md-2">23</span><span class="col-md-8"> This is the order </span><span class="col-md-2">£2.95</span>
			<span class="col-md-2">23</span><span class="col-md-8"> This is the order </span><span class="col-md-2">£2.95</span>
			
			
			
			<button class="col-md-8 col-md-offset-2 btn btn-danger top10 margin-bottom">Change Order</button>
		</div>
		
		
		
		
		
		
		
		
		<div class="col-md-4">
			
			<div class="col-md-12">
				<h3 class="col-md-12 text-center">Confirm Address</h3
				<label class="radio-inline col-md-3">
					<input type="radio" name="optradio"> Collection
				</label>
				
				<label class="radio-inline col-md-6 col-md-offset-1">
					<input type="radio" name="optradio">Delivery
				</label>
				
				
				<div class="col-md-12">
					<h4 class="col-md-12"> Your Current address</h4>
					<hr class="col-md-12"/>
					<p>Flat A1301, Room D</p>
					<p>20 Duke Street</p>
					<p>Southampton</p>
					<p>Hampshire</p>
					<p>SO14 3ET</p>
				</div>
				
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
			  		<button class="col-md-8 col-md-offset-2 btn btn-danger top10 margin-bottom">Update</button>
				</form>	
			</div>
		</div>
		
		
		
		<div class="col-md-4">
			<h3 class="col-md-12 text-center">Payment</h3>
			<label class="radio-inline col-md-3 col-md-offset-2">
					<input type="radio" name="optradio"> Cash
				</label>
				
				<label class="radio-inline col-md-6 col-md-offset-1">
					<input type="radio" name="optradio">Card
				</label>
			
			<a href="sucessful_order.php"><button class="col-md-8 col-md-offset-2 btn btn-danger margin-bottom top10">Make a Order</button></a>
		</div>
	</div>	
</div>
	
	
	
<?php
	
	include_once 'includes/footer.php';
?>