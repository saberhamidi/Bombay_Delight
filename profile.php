<?php
	
	include_once 'includes/header.php';
	include_once 'includes/db.php';
?>




		<div class="container col-md-12 col-sm-12 col-xs-12 margin-bottom">
			<div class="col-md-6 col-md-offset-1 col-sm-12 co-xs-12">
				<form onsubmit="return validateRegister(this)" class="col-md-12 col-sm-12 co-xs-12">
			
				<h3 class="col-md-12 col-sm-12 text-center">Personal details ...</h3><hr class="col-md-12"/>
			
				<div class="form-group col-md-5 col-md-offset-1 col-sm-6 col-xs-12">
					<h5 id="Fname">First name*</h5>
					<input name ="Fname" type="text" placeholder="Zia" class="form-control text-capitalize">
				
					<h5 id="Lname">Last name</h5>
					<input name="Lname" type="text" placeholder="Ahmed" class="form-control text-capitalize">
				</div>
				
				
				<div class="form-group col-md-5 col-sm-6 col-xs-12">
					<h5 id="tel">Tel*</h5>
					<input name ="tel" type="text" placeholder="02380 553 665" class="form-control">
					
		  			<div class="form-group col-md-14 col-sm-14 col-xs-14">
						<h5 id="mobile">Mobile</h5>
						<input name="mobile" type="text" placeholder="079 1211 0225" class="form-control">
		  			</div>
  				</div>
  				
  				<div class="form-group col-md-3  col-md-offset-8 col-sm-6 col-sm-offset-6 col-xs-12">
					<h5></h5>
					<input type="submit" value="Update" class="btn btn-info form-control">
  				</div>
  			</div>
  			
  			<div class="col-md-5 col-sm-12 co-xs-12">
	  			
	  			<h3>&nbsp;</h3>
	  			<?php
			
	  				include_once 'partials/user_menu.php';
				?>
	  			
  			</div>
  		</div>
	
	
	
<?php
	
	include_once 'includes/footer.php';
?>