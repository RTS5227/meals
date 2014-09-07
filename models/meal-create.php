<?php
require_once 'meedoo.php';
require_once 'config.php';
$database = new medoo();

$mealID = $_POST["mealID"];
$name = $_POST["name"];
$type = $_POST["type"];
$ingredients = $_POST["ingredients"];
$instructions = $_POST["instructions"];



// LATER --> double check if meal exists first


//if not...
$add = $database->insert('meals', [
	'mealID' => $mealID,
	'name' => $name,
	'status' => 'active',
	'type' => $type,
	'ingredients' => $ingredients,
	'instructions' => $instructions
]);

if($add){
	echo('good');
}
else{
	echo('bad');
}




?>