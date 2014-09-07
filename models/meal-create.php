<?php
require_once 'meedoo.php';
require_once 'config.php';
$database = new medoo();

$mealID = $_POST["mealID"];
$name = $_POST["name"];
$type = $_POST["type"];
$ingredients = $_POST["ingredients"];
$instructions = $_POST["instructions"];
$user = $_POST["user"];



// LATER --> double check if meal exists first

echo('MEALID:::: ' . $mealID);
//if not...
$add = $database->insert('meals', [
	'mealID' => $mealID,
	'name' => $name,
	'status' => 'active',
	'type' => $type,
	'ingredients' => $ingredients,
	'instructions' => $instructions,
	'user' => $user
]);

if($add){
	echo('good');
}
else{
	echo('bad');
}




?>