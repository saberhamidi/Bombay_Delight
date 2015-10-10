<?php
	session_start();
	if($_SESSION["loggedIn"] !=true){
		header("location: sign_in.php?page=dashBoard");
	}
	
	include_once 'includes/header.php';
	include_once 'includes/db.php';
?>




	<div class="container col-md-12 col-sm-12 col-xs-12">
		
		<h3 class="col-md-12 col-sm-12 col-xs-12 text-center">Welcome to Dshbord: Saber</h3>
		
		
		<div class="col-md-3 col-md-offset-1 col-sm-6 col-xs-12">
			<a class="jumbotron col-md-12" href="profile.php"><h3 class="text-center">Profile</h3></a>
		</div>
		<div class="col-md-3 col-sm-6 col-xs-12">
			<a class="jumbotron col-md-12" href="#"><h3 class="text-center">Address Book</h3></a>
		</div>
		<div class="col-md-3 col-sm-6 col-xs-12">
			<a class="jumbotron col-md-12" href="order_history.php"><h3 class="text-center">Order History</h3></a>
		</div>
		<div class="col-md-3 col-sm-6 col-md-offset-1 col-xs-12">
			<a class="jumbotron col-md-12" href="#"><h3 class="text-center">Payments</h3></a>
		</div>
		<div class="col-md-3 col-sm-6 col-xs-12">
			<a id = "chanPass" class="jumbotron col-md-12" href="#changePass"><h4 class="text-center">Change Email & Password</h4></a>
		</div>
		<div class="col-md-3 col-sm-6 col-xs-12">
			<a class="jumbotron col-md-12 margin-bottom btn-danger" href="logout.php"><h3 class="text-center">Logout</h3></a>
		</div>
		
	</div>
	
	<div id = "changePass">
		<form>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Email address</label>
		    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Password</label>
		    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputFile">File input</label>
		    <input type="file" id="exampleInputFile">
		    <p class="help-block">Example block-level help text here.</p>
		  </div>
		  <div class="checkbox">
		    <label>
		      <input type="checkbox"> Check me out
		    </label>
		  </div>
		  <button type="submit" class="btn btn-default">Submit</button>
		</form>
	</div>
	
	
<?php
	
	include_once 'includes/footer.php';
?>