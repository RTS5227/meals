<?php
error_reporting( E_ALL );
ini_set( "display_errors", 1 );

require_once 'meedoo.php';
require_once 'config.php';
$database = new medoo();
 

$userEmail = $_GET['userEmail'];



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
		"user",
		"position",
		"positionOrder"
	], 
	[ "AND" =>
		[
			"status" => 'active',
			"user" => $userEmail
		]
	]);


$dataJSON = json_encode($datas);

if($datas){
	echo($dataJSON);
}
else{
	echo('bad');
}

?>


