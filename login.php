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
		
	
			<div id='form__login' class='form ta-center form__login'>
				<h2 class='form__header'>Meal-z</h2>

				<div class='form__login-tabs'>
					<span class='form__login-tab form__login-tab--active form__login-tab--login form__login-tab--left'>Login</span><span class='form__login-tab form__login-tab--right form__login-tab--join'>Join Mealz</span>
				</div>

				<p class='form__input'><input type='email' name='email' id='email' placeholder='Email' autofocus></p>
				<p class='form__input hidden show-for__join'><input type='text' name='name' id='name' placeholder='Name'></p>
				<p class='form__input'><input type='text' name='password' id='password' placeholder='password'></p>
				<p class='ta-left'> <input id='hidepw2' type='checkbox'> <label for='hidepw2' class='d-inline'>Hide Password</label> </p>
				
				<a class="button-primary login-btn hide-for__join" id='login'  href="">Login</a>				
				<a class="button-primary login-btn show-for__join hidden" id='newUserSubmit' href="">Sign up!</a>

				<!-- <p><a class='standard-link' href="#demo">Demo the app</a></p> -->
				<div class='login-msg'></div>
			</div>


	
	
	</div>



        

	
	<?php require('public/partials/global/global-scripts.php'); ?>
	<script src="public/js/login.js"></script>
	
	


    </body>
</html>