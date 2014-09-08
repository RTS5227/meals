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

$profile_email = $profile[email];

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
		session_start();
		$_SESSION['user']=$email;
		echo('good');
	}
	else{
		echo('bad');
	}

}



?>