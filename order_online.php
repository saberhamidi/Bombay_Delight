<?php
	session_start();
	include_once 'includes/header.php';
	include 'includes/db.php';
	include_once 'classes/Category.class.php';
?>

	<div class="container col-md-12 col-sm-12">
		<div class="col-md-2 col-sm-4 col-md-offset-1">
			<h3 class="text-center"><u>Categories</u></h3>
			
			<?php 
				$categories = $conn->query("SELECT* FROM Category ORDER BY ID");
				
				if($categories->num_rows >0){
					while($category =$categories->fetch_assoc()){
						
						if(empty($_GET["category"])){
							$category_id = 1;	
						}
						
						else{
							$category_id = $_GET["category"];
						}
						
			?>
						<form action= "update_menu.php" method="post"><button name="category" class="col-md-10 btn btn-info mar_top" value="<?php echo $category['ID'];?>"><?php echo $category["Name"]; ?></button></form><br/>
						
			<?php
					}
				}else{
					echo "No categories found!";
				}
			?>
			
		</div>

		<div class="container col-md-6">
			<?php
				$categories = $conn->query("SELECT* FROM Category WHERE ID =$category_id");
				while($category= $categories->fetch_object("Category")){

					$category->listItems();
				}
				
			
			?>

		</div>
	
		<div class="container col-md-3 text-center">
			<h3 class=""><u>Shopping Chart</u></h3>
			<label class="radio-inline col-md-3 col-md-offset-3 text-center">
				<input type="radio" value="delivery" onchange ="deliveryMethod()" checked="checked" id="ck_box_delivery" name="method"/>Delivery
			</label>
				
			<label class="radio-inline col-md-3 text-center">
				<input type="radio" value ="collection" onchange ="deliveryMethod()" id="ck_box_collection" name="method"/>Collection
			</label><br><br>
			<div class="text-left" id = "items">
			</div>			
		</div>
</div>




<?php
	
	include_once 'includes/footer.php';
?>



