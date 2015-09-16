<div class="navbar navbar-default  navbar-fixed-top col-md-12 col-sm-12 col-xs-12">
	<div class="logo"><!-- This the container div start -->	
		<a href="index.php" class="col-md-4 col-sm-4 col-xs-9 col-md-offset-1  top10"><img src="images/logo.png"></a>
		<button class="navbar-toggle" data-toggle ="collapse" data-target= ".navHedaerCollapse">	
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>

	<div class="col-md-4 col-sm-4 col-xs-12 "><!-- This the container div start-->
		<h2 class="text_center tel collapse navbar-collapse navHedaerCollapse">02380 324 123</h2>
	</div>
	
	<div class=" col-md-2 col-sm-3 col-xs-10"><!-- This the container div start -->		
		<a href="order_online.php" class="order_button btn btn-info top10 collapse navbar-collapse navHedaerCollapse"><p>Order online</p></a>
	</div>
	
	
	
	
	<div class="container col-md-12 col-sm-12 col-xs-12">	
			
		<!-- To mak this part of the menu to get collaspe when we view that in mobile devices -->
		<div class="collapse navbar-collapse navHedaerCollapse">
			<ul class="nav navbar-nav text_center">
							
			<!-- move active class depend on the page title -->
			<li class="<?php if($page=='index.php'){echo'active';}?>"><a href="index.php">Home</a></li>
			
			<!-- move active class depend on the page title -->
			<li class="<?php if($page=='#'){echo'active';}?>"><a href="about.php">About Us</a></li>
			
			<!-- move active class depend on the page title -->
			<li class="<?php if($page=='order_online.php'){echo'active';}?>"><a href="order_online.php">Order Online</a></li>

					
			<!-- move active class depend on the page title -->
			<li class="<?php if($page=='#'){echo'active';}?>"><a href="contact.php">Contact</a></li>
			
			
			<div class="col-md-4 col-sm-12 col-xs-12 top10 pull-right">
				<p class="col-md-4 col-sm-4 col-xs-12"><a href="sign_in.php?page=dashBoard">Log-<span id="user_name">in</span></a></p>
				<p class="col-md-4 col-sm-4 col-xs-12"><a href="register.php">Sign-up</a></span></p>
				<p class="col-md-4 col-sm-4 col-xs-12"><a href="orderConfirmation.php">Basket</a></span></p>
			</div>
			
			

		</div><!-- This the container div end tag-->
	</div>
</div><!-- This the navbar div end tag-->