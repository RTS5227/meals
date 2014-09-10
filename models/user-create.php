<?php
require_once 'meedoo.php';
require_once 'config.php';
$database = new medoo();

session_start();

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);


$email = $_POST["email"];
$name = $_POST["name"];
$password1 = $_POST["password"];



$password = md5($password1 . $salt);

//check if user exists
$profile = $database->get("users", 
	[ "email"], 
	[ "email" => $email ]);

$profile_email = $profile['email'];

if($profile_email){
	echo('emailTaken');
}

else{

	//if not...
	$add = $database->insert('users', [
		'email' => $email,
		'password' => $password,
		'name' => $name
	]);

	if($add){
		$_SESSION['user']=$email;
		echo('good');
	}
	else{
		echo('bad');
	}

}



?>