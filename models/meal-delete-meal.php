<?php
error_reporting( E_ALL );
ini_set( "display_errors", 1 );

require_once 'meedoo.php';
require_once 'config.php';
$database = new medoo();
 
echo('first test...');
$mealID = $_POST["mealID"];
echo('second:')
echo($mealID);
echo('---');

// echo('mealid in PHP: '. $mealID);

// $remove = database->delete("meals", [
// 	"AND" => [
// 		"mealID" => $mealID
// 	]
// ]);


// if($remove){
// 	echo('good');
// }
// else{
// 	echo('bad');
// }

?>


