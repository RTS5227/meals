<?php
require_once 'meedoo.php';
require_once 'config.php';

$database = new medoo();


$email = $_GET["email"];
$password1 = $_GET["password"];

$password = md5($password1 . $salt);
 


$profile = $database->get("users", [
	"email",
	"name",
	"password"
], [
	"email" => $email
]);

$profile_pw = $profile[password];
$profile_name = $profile[name];



if($password == $profile_pw){
	echo('good');
	session_start();
	$_SESSION['user']=$email;
	$_SESSION['name']=$profile_name;
}

else{
	echo 'bad';
}


?>