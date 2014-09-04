<?php
require_once 'meedoo.php';
$database = new medoo();


$email = $_POST["email"];
$password = $_POST["password"];


$add = $database->insert('users', [
	'email' => $email,
	'password' => $password
]);


if($add){
	echo('good');
}
else{
	echo('bad');
}


?>