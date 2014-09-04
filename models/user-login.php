<?php
require_once 'meedoo.php';
$database = new medoo();

$email = $_GET["email"];
$password = $_GET["password"];

$profile = $database->get("users", [
	"email",
	"password"
], [
	"email" => $email
]);



echo(json_encode($profile));


?>