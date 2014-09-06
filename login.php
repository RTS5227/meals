<?php
error_reporting( E_ALL );
ini_set( "display_errors", 1 );

session_start();
if(isset($_SESSION['user'])){
	header("Location: http://localhost:8888/apps/meals/");
}

?>



<?php require('public/partials/global/header.php'); ?>

	<body ng-app='MealsApp' class='login-bg'>
	
		<div class='login-reg-wrapper'>
		
		

			<div class='form ta-center form__login'>
				<h2 class='form__header'>Meal-z</h2>
				<p class='form__input'><input type='text' name='email' id='email' placeholder='email' autofocus></p>
				<p class='form__input'><input type='text' name='password' id='password' placeholder='password'></p>
				<p class='ta-left'> <input id='hidepw2' type='checkbox'> <label for='hidepw2'>Hide Password</label> </p>
				<a class="button-primary login-btn" id='login'  href="">Login</a>
				<a class="button-primary login-btn" id='newUserSubmit' href="">Sign me up!</a>
				<p><a class='standard-link' href="#demo">Demo the app</a></p>
				<div class='login-msg'></div>
			</div>


	
	
	</div>



        

	
	<script src="public/js/libs/jquery.js"></script>
	<script src="public/js/libs/helpers.js"></script>
	<script src="public/js/login.js"></script>

    </body>
</html>