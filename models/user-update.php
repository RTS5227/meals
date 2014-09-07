<?php
require_once 'meedoo.php';
require_once 'config.php';
$database = new medoo();

$email = $_POST["email"];
$name = $_POST["name"];

$update = $database->update("users", 
	["name" => $name ], 
	["email" => $email]
);

if($update){
	echo('good');
	session_start();
	$_SESSION['name']=$name;
}
else{
	echo('bad');
}

?>