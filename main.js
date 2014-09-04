
log = function(m){
	console.log(m);
}

// New User
//=============
$('#newUserSubmit').on('click', function(){
	var email = $('#email').val();
	var password = $('#password').val();

	if(!email || !password){
		log('fill in all info');
		return false;
	}

	var post_data = {
		'email': email,
		'password': password
	}

	$.post(
		'models/user-create.php', 
		post_data, 
		function(response){
			if(response === 'good'){ log('we good');}
			else{ log('we not good'); }
		}
	)

})



// Login User
//=============
$('#loginSubmit').on('click',function(){
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
			}
			else{
				log('we bad');
			}
		}
	)

})



