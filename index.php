<?php
error_reporting( E_ALL );
ini_set( "display_errors", 1 );

session_start();


if(isset($_SESSION['user'])){
	echo "Loggedin Status=". $_SESSION['user'];	
}
else{
	echo "Not logged in";
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

	
	<h2>Meal Planner</h2>
	<hr>


	<h2>Register</h2>

	<p><input type='text' name='email' id='email' placeholder='email'></p>
	<p><input type='text' name='password' id='password' placeholder='password'></p>
	<p> <button id='newUserSubmit' type='button'>Sign me up!</button>



	<h2>Login</h2>

	<p><input type='text' name='loginEmail' id='loginEmail' placeholder='email'></p>
	<p><input type='text' name='loginPassword' id='loginPassword' placeholder='password'></p>
	<p> <button id='loginSubmit' type='button'>Login</button>




        

	<script src="jquery.js"></script>
	<script src="main.js"></script>


        
    </body>
</html>