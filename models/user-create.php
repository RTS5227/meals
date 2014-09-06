<?php
require_once 'meedoo.php';
require_once 'config.php';
$database = new medoo();


$email = $_POST["email"];
$name = $_POST["name"];
$password1 = $_POST["password"];


$password = md5($password1 . $salt);

//check if user exists
$profile = $database->get("users", 
	[ "email"], 
	[ "email" => $email ]);


if($profile){
	echo('usernameTaken');
}

else{

	//if not...
	$add = $database->insert('users', [
		'email' => $email,
		'name' => $name,
		'password' => $password
	]);


	if($add){
		echo('good');
	}
	else{
		echo('bad');
	}

}




?>