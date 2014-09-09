
/*

Add Validations:
 - email
 - password characters
 - minimum number of characters
*/


// Toggle States
// ======================

$('.form__login-tab').on('click',function(){
	$('.form__login-tab').removeClass('form__login-tab--active');
	$(this).addClass('form__login-tab--active');
	$('.msg').remove();
	$('#email').focus();
})

$('.form__login-tab--login').on('click',function(){
	$('.show-for__join').addClass('hidden');
	$('.hide-for__join').removeClass('hidden');
})

$('.form__login-tab--join').on('click',function(){
	$('.show-for__join').removeClass('hidden');
	$('.hide-for__join').addClass('hidden');
})



// Toggle Password State
// ======================
$('#hidepw2').on('click',function(e){
	if($(this).is(':checked')){
		$('#password').attr('type','password');
	}
	else{
		$('#password').attr('type','text');
	}
})



// Login/Reg User
// ======================
$('body').on('click', '.login-btn', function(e){
	e.preventDefault();


	$('.login-msg').empty();  // WHY ISN'T THIS WORKING????
	

	var email = $('#email').val();
	var password = $('#password').val();
	var name = $('#name').val();	


	// Validations - empty
	if(!email || !password){
	var loginError = new Message({
		target: '.login-msg',
		type: 'error',
		message: 'Please fill in all form fields'
	}).show();
		return false;
	}
	

	// Validations - more specific
	$('#email').validationStation({ 
		title: 'Email Error',
		type: 'email',
		msgDest: '.login-msg'
	})
	$('#password').validationStation({ 
		title: 'Password',
		type: 'password',
		min: 5
	})

	


	var post_data = {
		'email': email,
		'password': password,
		'name': name
	}


	//Login
	if($(this).attr('id') == 'login'){
		$.get(
			'models/user-login.php',
			post_data, 
			function(response){

				if(response == 'good'){
					log('we good');
				}
				else{
					// bad login
					var loginError = new Message({
						target: '.login-msg',
						type: 'error',
						message: 'Username or Password are incorrect'
					}).show();
					

				}
			}
		)
	}

	//Register
	else{
		$.post(
			'models/user-create.php',
			post_data, 
			function(response){
				log('response: ');
				log(response);
				if(response === 'emailTaken'){
					var loginError = new Message({
						target: '.login-msg',
						type: 'error',
						message: "Email is already taken. <a class='standard-link' href='reset'>Forgot your password?</a>"
					}).show();
				}
				
				else if(response == 'good'){
					window.location = 'http://localhost:8888/apps/meals/'
				}
				else{
					var loginError = new Message({
						target: '.login-msg',
						type: 'error',
						message: 'We apologize, we are experiencing technical difficulties'
					}).show();
				}
			}
		)
		
	}




})






