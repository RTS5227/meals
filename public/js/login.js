
/*

Add Validations:
 - email
 - password characters
 - minimum number of characters



*/

// Login/Reg User
//=============
$('body').on('click', '.login-btn', function(e){
	e.preventDefault();
	
	var email = $('#email').val();
	var password = $('#password').val();	


	if(!email || !password){
	var loginError = new Message({
		target: '.login-msg',
		type: 'error',
		message: 'Please fill in all form fields'
	}).show();
		return false;

	}

	var post_data = {
		'email': email,
		'password': password
	}


	//Login
	if($(this).attr('id') == 'login'){
		$.get(
			'models/user-login.php',
			post_data, 
			function(response){

				if(response == 'good'){
					log('we good');
					window.location = 'http://localhost:8888/apps/meals/'
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



