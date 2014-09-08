log('meal.js');


app.controller("MealController", function($scope, $stateParams, $http) {

	var mealID = $stateParams.mealID;


	$scope.deleteMeal = function(){
		log('delete the meal');
		
		var fields = { 'mealID': $scope.meal.mealID };

		$http({
		    url: 'models/meal-delete-single.php',
		    method: "GET",
    		params: fields
		}).success(function(data, status, headers, config) {
		    log('success');
		    log(data);
		    window.location.replace('#/meals')
		    
		}).error(function(data, status, headers, config) {
		    log('error');
		});


	}

	



	var loadMeal = function(){
	
		var fields = { 'mealID': mealID };

		$http({
		    url: 'models/meal-get-single.php',
		    method: "GET",
    		params: fields
		}).success(function(data, status, headers, config) {
		    $scope.meal = data;
		    
		}).error(function(data, status, headers, config) {
		    log('error');
		    $scope.status = status;
		});

	}

	loadMeal(mealID);


});



// .controller('MyCtrl1', ['$scope','$routeParams', function($scope, $routeParams) {
//   var param1 = $routeParams.param1;
//   var param1 = $routeParams.param2;
//   ...
// }]);

