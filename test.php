<?php
	
	//session_start();
$cars = array("toyota", "bmw", "audi", "range rover","toyota", "bmw", "audi", "range rover","toyota", "bmw", "audi", "range rover");

echo "<pre>";
print_r($cars);
echo "</pre>";


for($i =0; $i<count($cars); $i++){
	
	if($cars[$i]== "bmw"){
		
		unset($cars[$i]);
	}
}

$cars = array_values($cars);

echo "<pre>";
print_r($cars);
echo "</pre>";	
?>