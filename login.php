<?php
error_reporting( E_ALL );
ini_set( "display_errors", 1 );

session_start();
if(isset($_SESSION['user'])){
	header("Location: http://localhost:8888/apps/meals/");
}

?>


<?php require('public/partials/global/header.php'); ?>

	<div class='row-fluid'>
		<div class='col-md-3'></div>
		<div class='col-md-6'>
			
			<div class='register'>
				<h2>Register</h2>
				<p> <input type='text' name='email' id='email' placeholder='email'></p>
				<p> <input type='name' name='name' id='name' placeholder='name'></p>
				<p> <input type='text' name='password' id='password' placeholder='password'></p>
				<p> <input id='hidepw' type='checkbox'> <label for='hidepw'>Hide Password</label> </p>
				<p> <button id='newUserSubmit' type='button'>Sign me up!</button></p>
			</div>

			<hr>

			<div class='login'>
				<h2>Login</h2>
				<p><input type='text' name='loginEmail' id='loginEmail' placeholder='email'></p>
				<p><input type='text' name='loginPassword' id='loginPassword' placeholder='password'></p>
				<p> <input id='hidepw2' type='checkbox'> <label for='hidepw2'>Hide Password</label> </p>
				<p> <button id='loginSubmit' type='button'>Login</button></p>
			</div>

			<div class='col-md-3'></div>
	</div>	
	
	</div>



        

	
	<script src="public/js/libs/jquery.js"></script>
	<script src="public/js/libs/helpers.js"></script>
	<script src="public/js/login.js"></script>

    </body>
</html>