<?php

	class Category{
		
		public $ID;
		public $Name;
		
	
		public function listItems(){
			require 'includes/db.php';
			$items = $conn->query("SELECT* FROM Item WHERE Category_ID = '$this->ID'");
				echo "<a name = 'category$this->ID'><h3 class='text-center'>$this->Name </h3></a>";
				while($item = $items->fetch_object()){
														
							echo "
							<h4 class='col-md-12'>
								<span name = 'id' class='col-md-1'>".$item->ID."</span> 
								<span name = 'name' class='col-md-6'>".$item->Name."</span> 
								<span name = 'price' class='col-md-3'>".$item->Price."</span>" ?>
								<span class='btn btn-primary glyphicon glyphicon-plus' onclick="process(<?php echo $item->ID;?>)"></span>
								<?php
							
								echo"
								<p class='col-md-10 text-left'>".$item->Description."</p>
							</h4><hr/ class='col-md-11'>";
				}
				
		}
	}

?>