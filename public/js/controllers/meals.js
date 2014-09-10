
app.controller("MealsController", function($scope, $stateParams, $http) {

	$ingList = $('.ingredients-list')

	$scope.mealID = $('.mealSubmit').data('id');
	$scope.name = '';
	$scope.type = '';
	$scope.ingredients = [];
	$scope.instructions = '';

	$scope.editing = false;
	$scope.editingName = '';
	

	var init = function(){
		loadMeals();
		$('#username').html($scope.user.name);
		sortable();
	}


	var resetMealEntry = function(){
		$scope.mealID = '';
		$scope.name = '';
		$scope.type = '';
		$scope.ingredients = [];
		$scope.instructions = '';

		$scope.editing = false;
		$scope.editingName = '';
	}

	// events
	$('body').on('click', '.sidebar-nav__new-meal', function(){
		$scope.$apply(resetMealEntry);
	})



	var sortable = function(){

		$( ".sortable" ).sortable({
			  helper: "clone",
			  connectWith: ".sortable",
			  refreshPositions: true,
			  update: function(){
			  	log('update db');
			  }
		})
	}





	// LOAD MEALS IN THE DOM
	// ==============================
	var loadMeals = function(){
		var url = 'models/meal-get-meals.php';
		
		var fields = { 'userEmail': $scope.user.email };
		log(fields);

		$http({
		    url: 'models/meal-get-meals.php',
		    method: "GET",
    		params: fields
		}).success(function(data, status, headers, config) {
		    log('success');
		    log(data);
		    $scope.meals = data;
		    
		}).error(function(data, status, headers, config) {
		    log('error');
		});

	}







	// UPDATE A SINGLE MEAL
	// ==============================

	$scope.updateMeal = function(){
		log('update Meal');

		fields = {
			'mealID': $('.mealSubmit').data('id'),  //why can't get from scope??
			'user': $scope.user.email,
			'name': $scope.name,
			'type': $scope.type,
			'instructions': $scope.instructions,
			'ingredients': $scope.ingredients
		}

		$http({
		    method: 'POST',
		    url: 'models/meal-update-single.php',
		    data: Object.toparams(fields),
		    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
		}).success(function(response){
			log('response:');
			log(response);
			if(response === 'good'){
				log('goodness');
				var loginError = new Message({
					target: '.createMeal-msg',
					type: 'success',
					message: "Meal successfully updated",
					timeout: true
				}).show();
			}
		})

	}




	// CREATE A SINGLE MEAL
	// ==============================

	$scope.saveMeal = function(){
		var time = Date.now();

		fields = {
			'user': $scope.user.email,
			'name': $scope.name,
			'type': $scope.type,
			'instructions': $scope.instructions,
			'ingredients': $scope.ingredients
		}

		log('fields:');
		log($scope.fields);

		fields.mealID = time;
		log(fields);
		// Store meal id as timestamp
		$('.mealSubmit').attr('data-id',time);

		log('Noew storing:');
		log(fields);
				
		$http({
		    method: 'POST',
		    url: 'models/meal-create.php',
		    data: Object.toparams(fields),
		    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
		}).success(function(response){
			log('response:');
			log(response);
			loadMeals();
			$scope.editing = true;
			$scope.editingName = fields.name;

			var loginError = new Message({
				target: '.createMeal-msg',
				type: 'success',
				message: "Meal successfully updated. <a class='standard-link' href='#/meal/"+fields.mealID+"'>Check it out</a>",
				timeout: true,
				timeoutLength: 8000
				}).show();

		})


	}


	// ADD INGREDIENT
	// ==============================
	$scope.addIngredient = function(){
		ingr = $('#ingredient');
		$scope.ingredients.push(ingr.val());
		log($scope.ingredients)
		ingr.val('');
	}


	$scope.removeIngredient = function(ingredient){
		log('removing');
	
		var i = $scope.ingredients.indexOf(ingredient);
		$scope.ingredients.splice(i, 1);
		log($scope.ingredients);
	}



	// Init the page
	init();
	
	// EVENTS.....
	// =============================================================
	$('body').on('dblclick','.ingredients-list__item',function(){
		var text = $(this).find('.ingredient-name').text();
		$(this).remove();
		$('#ingredient').val(text).focus();

	})



});





