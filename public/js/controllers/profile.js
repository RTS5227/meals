log('profile.js');


app.controller("ProfileController", function($scope, $stateParams) {

	// Profile info
	// $scope.user.email
	// $scope.user.name



	
	$scope.updateProfile = function(){
		var name = $scope.user.name
		var email = $scope.user.email

		var post_data = {
			'email': email,
			'name': name
		}

		$.post(
			'models/user-update.php',
			post_data, 
			function(response){
				log('response: ');
				log(response);
			
		})

	}





});