<?php
require_once 'meedoo.php';
require_once 'config.php';
$database = new medoo();

$mealID = $_POST["mealID"];
$name = $_POST["name"];
$type = $_POST["type"];
$ingredients = $_POST["ingredients"];
$instructions = $_POST["instructions"];


$update = $database->update("meals", 
	[
		"name" => $name,
		"type" => $type,
		"ingredients" => $ingredients,
		"instructions" => $instructions
	 ],
	["mealID" => $mealID]
);

if($update){
	echo('good');
}
else{
	echo('bad');
}

?>