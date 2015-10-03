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
				<h2 class="col-md-12 text-center">Please select a collection time</h2>
				<div class="col-md-12" id="deli_div">
			</div>
		</div>			
		
		<div class="col-md-12" id="coll_div">
			<hr class="col-md-12"/>
					
			<div class="col-md-6 top10 address_div">
				<label class="col-md-10 col-md-offset-2">Collection Time</label>
				<select class="col-md-10 col-md-offset-1">
					<option selected="selected" value="volvo">
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
				
				<div class="col-md-6 text-center top10 address_div">
					<p>Hi <span>Zia</span></p>
					<p>Please arrive at <span>17.25</span></p>
				</div>
            </div>
  		</div>
  		
  		<div class="col-md-5">	
    	    <?php
    		    include_once 'partials/user_menu.php';
    	    ?>	
        </div>
  		
  		<a href="paymentConfirmation.php"><button id="btn" class="col-md-3 col-md-offset-3 btn btn-danger top10">Continue to Payment </button></a>
      
	</div>
</div>
	
	
	
	
<?php
	
	include_once 'includes/footer.php';
?>