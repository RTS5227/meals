<?php
error_reporting( E_ALL );
ini_set( "display_errors", 1 );

require_once 'meedoo.php';
require_once 'config.php';
$database = new medoo();

// echo 'Request: ' . $_SERVER['REQUEST_METHOD'].'. ';

$mealID = $_GET['mealID'];


$meal = $database->get("meals", 
	[
		"mealID",
		"id",
		"datecreated",
		"name",
		"type",
		"ingredients",
		"instructions",
		"status",
		"user"
	], 
	["mealID" => $mealID]);

$dataJSON = json_encode($meal);

if($meal){
	echo($dataJSON);
}
else{
	echo('bad');
}

?>


