<?php
	
	include_once 'includes/header.php';
?>


<div class="container">
	<div class="col-md-12 col-sm-12 co-xs-12">
		<form onsubmit="return validateRegister(this)" class="col-md-12 col-sm-12 co-xs-12">
			
			<h3 class="col-md-12 col-sm-12 text-center">Personal details ...</h3><hr class="col-md-12"/>
			
			<div class="form-group col-md-3 col-sm-6 col-xs-12">
				<h5 id="Fname">First name*</h5>
				<input name ="Fname" type="text" class="form-control text-capitalize">
				
				<h5 id="Lname">Last name</h5>
				<input name="Lname" type="text" class="form-control text-capitalize">
				
  			</div>
  			<div class="form-group col-md-3 col-sm-6 col-xs-12">
				<h5 id="email">Email address*</h5>
				<input name="email" type="email" class="form-control text-lowercase" >
				
	  			<div class="form-group col-md-14 col-sm-14 col-xs-14">
					<h5 id="cemail">Confirm your email address*</h5>
					<input name="cemail" type="email" class="form-control text-lowercase" >
	  			</div>
  			</div>
  			
  			<div class="form-group col-md-3 col-sm-6 col-xs-12">
				<h5 id="password">Password*</h5>
				<input name="password" type="password" class="form-control">
				
	  			<div class="form-group col-md-14 col-sm-14 col-xs-14">
					<h5 id="cpassword">Confirm your password*</h5>
					<input name="cpassword" type="password" class="form-control">
	  			</div>
  			</div>
  			
  			<div class="form-group col-md-3 col-sm-6 col-xs-12">
				<h5 id="tel">Tel*</h5>
				<input name ="tel" type="text" class="form-control">
				
	  			<div class="form-group col-md-14 col-sm-14 col-xs-14">
					<h5 id="mobile">Mobile</h5>
					<input name="mobile" type="text" class="form-control">
	  			</div>
  			</div>
  			
  			
  			<h3 class="col-md-12 col-sm-12  col-xs-12 text-center">Delivery address ...</h3><hr class="col-md-12"/>
  			
  			
  			<div class="form-group col-md-3 col-md-offset-1  col-sm-6 col-xs-12">
				<h5 id="house">House name / Door no*</h5>
				<input name="house" type="text" class="form-control text-capitalize">
				
	  			<div class="form-group col-md-14  col-sm-14 col-xs-14">
					<h5 id="street">Street name*</h5>
					<input name="street" type="text" class="form-control text-capitalize">
	  			</div>
  			</div>
  			<div class="form-group col-md-3 col-sm-6 col-xs-12">
				<h5 id ="town">Town Name*</h5>
				<input name="town" type="text" class="form-control text-capitalize">
				
	  			<div class="form-group col-md-14 col-sm-14 col-xs-14">
					<h5 id="count">Country Name</h5>
					<input name="count" type="text" class="form-control text-capitalize">
	  			</div>
  			</div>
  			<div class="form-group col-md-3 col-sm-6 col-xs-12">
				<h5 id="post">POSTCODE*</h5>
				<input name="post" type="text" class="form-control text-uppercase">
				
  			</div>
  			
  			
  			<div class="form-group col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-6 col-xs-12">
				<h5></h5>
				<input type="submit" value="Register" class="btn btn-info form-control">
  			</div>
  			
  			
  			
  			
  			
  			<p class="col-md-12 col-sm-12 col-xs-12 sign-margin-top margin-bottom text-center">
	  			Please Provide the correct information best of your knowledge ! 
  			</p>
  			
		</form>
	</div>
</div>





















<?php
	
	include 'includes/footer.php';
?>