<?php
require_once 'meedoo.php';
require_once 'config.php';
$database = new medoo();

$mealID = $_POST["mealID"];
$position = $_POST["position"];
$positionOrder = $_POST["positionOrder"];



$update = $database->update("meals", 
	[ 
		"position" => $position,
		"PositionOrder" => $positionOrder
	], 
	[ "mealID" => $mealID ] 	// ADD --> AND USER == $USER
);

if($update){
	echo('good');
}
else{
	echo('bad');
}

?>