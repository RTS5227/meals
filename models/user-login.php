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

$profile_pw = $profile[password];



if($password == $profile_pw){
	echo('good');
	session_start();
	$_SESSION['user']=$email;
}

else{
	echo 'bad';
}


?>