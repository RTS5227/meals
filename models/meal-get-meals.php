<?php
error_reporting( E_ALL );
ini_set( "display_errors", 1 );

require_once 'meedoo.php';
require_once 'config.php';
$database = new medoo();
 
$datas = $database->select("meals", 
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
	["status" => 'active']);

$dataJSON = json_encode($datas);

if($datas){
	echo($dataJSON);
}
else{
	echo('bad');
}

?>


