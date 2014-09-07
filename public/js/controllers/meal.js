log('meal.js');


app.controller("MealController", function($scope, $stateParams, $http) {

	var mealID = $stateParams.mealID;
	log('load meal: ' + mealID);
	

});



// .controller('MyCtrl1', ['$scope','$routeParams', function($scope, $routeParams) {
//   var param1 = $routeParams.param1;
//   var param1 = $routeParams.param2;
//   ...
// }]);

