log('profile.js');


app.controller("ProfileController", function($scope, $stateParams) {

	log('hey there');
	log($scope.user);

	// Fire it up
	(init = function(){
		log('init me');
		$('#email').val($scope.user.email);
		$('#name').val($scope.user.name);
	})();


});