<?php
error_reporting( E_ALL );
ini_set( "display_errors", 1 );

require_once 'meedoo.php';
require_once 'config.php';
$database = new medoo();

// echo 'Request: ' . $_SERVER['REQUEST_METHOD'].'. ';

$mealID = $_GET['mealID'];


$del = $database->delete("meals", [
	"AND" => [
		"mealID" => $mealID
	]
]);



if($del){
	echo('good');
}
else{
	echo('bad');
}

?>