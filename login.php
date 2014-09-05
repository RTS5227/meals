<?php
error_reporting( E_ALL );
ini_set( "display_errors", 1 );

session_start();
if(isset($_SESSION['user'])){
	header("Location: http://localhost:8888/apps/meals/");
}

?>


<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">        
    </head>
    <body>

	
	
	<section>
		<h2>Register</h2>
		<p><input type='text' name='email' id='email' placeholder='email'></p>
		<p><input type='text' name='password' id='password' placeholder='password'></p>
		<p> <button id='newUserSubmit' type='button'>Sign me up!</button></p>
	</section>

	<hr>

	<h2>Login</h2>

	<p><input type='text' name='loginEmail' id='loginEmail' placeholder='email'></p>
	<p><input type='text' name='loginPassword' id='loginPassword' placeholder='password'></p>
	<p> <button id='loginSubmit' type='button'>Login</button></p>




        

	
	<script src="public/js/libs/jquery.js"></script>
	<script src="public/js/libs/angular.min.js"></script>
	<script src="public/js/libs/angular-route.js"></script>
	<script src="public/js/libs/ui-router.js"></script>
	<script src="public/js/libs/helpers.js"></script>
	


	<script src="public/js/app.js"></script>
	<script src="public/js/routes.js"></script>

        
    </body>
</html>