

// New User
//=============
$('body').on('click', '#newUserSubmit', function(){
	var email = $('#email').val();
	var password = $('#password').val();
	var name = $('#name').val();

	if(!email || !password){
		log('fill in all info');
		return false;
	}

	var post_data = {
		'email': email,
		'name' : name,
		'password': password
	}

	$.post(
		'models/user-create.php', 
		post_data, 
		function(response){
			if(response === 'good'){ 
				log('we good');
			}
			else if(response === 'usernameTaken'){
				log('username taken');
			}
			else{ 
				log('we not good'); 
			}
		}
	)

})



// Login User
//=============
$('body').on('click', '#loginSubmit', function(){
	var email = $('#loginEmail').val();
	var password = $('#loginPassword').val();	

	if(!email || !password){
		log('fill in all info');
		return false;
	}

	var post_data = {
		'email': email,
		'password': password
	}


	$.get(
		'models/user-login.php', 
		post_data, 
		function(response){
			if(response === 'false'){
				log('Bad login my friend');
			}
			if(response == 'good'){
				log('we good');
				window.location = 'http://localhost:8888/apps/meals/'
			}
			else{
				log('we bad');
			}
		}
	)

})



