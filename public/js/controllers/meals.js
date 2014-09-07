log('meals.js');


app.controller("MealsController", function($scope, $stateParams, $http) {

	$ingList = $('.ingredients-list')

	$scope.mealID = $('.mealSubmit').data('id');
	$scope.name = '';
	$scope.type = '';
	$scope.ingredients = '';
	$scope.instructions = '';

	$scope.editing = false;
	$scope.editingName = '';
	

	var init = function(){
		loadMeals();
		$('#username').html($scope.user.name);
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




	// GET INGREDIENTS LIST FROM DOM
	// ==============================
	var getIngredients = function(){
		var ingredients = [];
		$('.ingredients-list__item').each(function(i, elem) {
		    ingredients.push($(elem).text());
		});
		return ingredients.toString();
	}





	// UPDATE A SINGLE MEAL
	// ==============================

	$scope.updateMeal = function(){
		log('update Meal');

		// $scope.mealID = $('.mealSubmit').data('id');
		$scope.ingredients = getIngredients();


		fields = {
			'mealID': $('.mealSubmit').data('id'),  //why can't get from scope??
			'user': $scope.user.email,
			'name': $scope.name,
			'type': $scope.type,
			'instructions': $scope.instructions,
			'ingredients': $scope.ingredients
		}

		log('updating:');
		log(fields);
				
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
					message: "Meal successfully updated"
				}).show();
			}
		})

	}




	// CREATE A SINGLE MEAL
	// ==============================

	$scope.saveMeal = function(){
		var time = Date.now();
		$scope.ingredients = getIngredients();

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

		})


	}


	// ADD INGREDIENTS TO DOM
	// ==============================
	$scope.addIngredient = function(){
		ingr = $('#ingredient');
		var remove = "<a href='#' class='fa fa-remove ingredient-remove'></a>";
		var newIng  = "<li class='ingredients-list__item'>"+remove+"<span class='ingredient-name'>"+ingr.val();+"</span></li>";
		$ingList.append(newIng);
		ingr.val('');

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


	$('body').on('click','.ingredient-remove',function(e){
		e.preventDefault();
		$(this).closest('.ingredients-list__item').remove();
	})



});





