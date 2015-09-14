<?php
	
	include_once 'includes/header.php';
	include_once 'includes/db.php';
?>




<div class="container">
	<div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6 col-xs-12 margin-top">
		<!-- Detect and desplay error message on the page when the user loging fails-->
		<?php
			if (isset($_GET["error"])){
				if($_GET["error"]==1){
						
					echo "<p class ='error'> Both Username and Password Required!</p>";
				}
						
			if($_GET["error"]==2){
				echo "<p class='error'> Could not log in. Valid authentication credentials were not provided!</p>";
				}
						
			else if($_GET["error"]==3){
							
				echo "<p class='error'> Incorrect Username or Password, please try again!</p>";
				}	
			}
					
		?>
		<h3 class=" col-md-12 text-center">Please log-in</h3>
		
		<form onsubmit="return validateSignIn(this)" method="post" action="logingProcess.php">
			<div class="form-group col-md-12 col-sm-12 ">
					<h5 id = "user" class="text-center">Email address</h5>
					<input type="text"  name="userName" class="form-control text-lowercase">
					
					<h5 id = "pass" class="text-center">Password</h5>
					<input type="password" name = "password" class="form-control">
					
	  		</div>
	  		
	  		<div class="form-group col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
	
					<input type="submit" value="Login" class="btn btn-info form-control">
	  		</div>
		</form>
  		
  		<p class="col-md-12 col-sm-12 col-xs-12 sign-margin-top margin-bottom text-center">
	  		Please make sure your account details is safe!
  		</p>
	</div>
</div>
	
	
	
<?php
	
	include_once 'includes/footer.php';
?>