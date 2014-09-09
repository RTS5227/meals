<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);


require_once 'meedoo.php';
require_once 'config.php';

$root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';


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
	session_start();
	$_SESSION['user']=$email;
	$_SESSION['name']=$profile_name;
	header('Location: '. $root . '/meals/#hi');
	echo($root);


}

else{
	echo 'bad';
}


?>