log('meals.js');


app.controller("MealsController", function($scope, $stateParams, $http) {

	$ingList = $('.ingredients-list')
	$('#username').html($scope.user.name);

	
	$scope.editing = false;
	$scope.editingName = ''
	

	var loadMeals = function(){
		var url = 'models/meal-get-meals.php';
		
		$http({
		    url: url,
		    method: "GET",
		}).success(function(data, status, headers, config) {
		    log('success');
		    log(data);
		    $scope.meals = data;

		}).error(function(data, status, headers, config) {
		    log('error');
		    $scope.status = status;
		});

	}






	var postNewMeal = function(fields){

		var url = 'models/meal-create.php';
				
		$http({
		    method: 'POST',
		    url: url,
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



	var putNewMeal = function(){
		log('putNewMeal()');
	}


	$scope.saveMeal = function($event){

		var time = $event.timeStamp; 
		var mealID = $('.mealSubmit').data('id');
	
		var name = $('#mealName').val();
		var type = $('#mealType option:selected').val();
		var instructions = $('#instructions').val();
		var ingredients = [];
		$('.ingredients-list__item').each(function(i, elem) {
		    ingredients.push($(elem).text());
		});
		ingredients = ingredients.toString();

		fields = {
			'time': time,
			'name': name,
			'type': type,
			'instructions': instructions,
			'ingredients': ingredients
		}

		// Meal exists - so let's update it
		if( mealID ){
			log('id exists:');
			fields.mealID = mealID;
			putNewMeal( fields );
		}

		// Meal doesn't exist - so let's create it
		else{
			log('id does not exist:')
			fields.mealID = time;
			// Store meal id as timestamp
			$('.mealSubmit').attr('data-id',time);
			$('.mealDelete').attr('data-id',time);

			postNewMeal(fields);

		}

	

	}


	$scope.deleteMeal = function($event){
		log('delete the meal');
		var id = $('.mealDelete').data('id');
		var fields = { 'mealID': id }
		var url = 'models/meal-delete-meal.php';


		log('id: ' + id)
		log('mealID: ');
		log(fields);


		$http({
		    method: 'DELETE',
		    url: url,
		    data: Object.toparams(fields),
		    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
		}).success(function(response){
			log('response:');
			log(response);
			
			$scope.editing = false;
			$scope.editingName = '';
			loadMeals();
		})


	}


	// EVENTS.....
	$('body').on('dblclick','.ingredients-list__item',function(){
		var text = $(this).find('.ingredient-name').text();
		$(this).remove();
		$('#ingredient').val(text).focus();

	})



	$('body').on('click','.ingredient-remove',function(e){
		e.preventDefault();
		$(this).closest('.ingredients-list__item').remove();
		$('#ingredient').val(text).focus();

	})



	$scope.addIngredient = function(){
		ingr = $('#ingredient');
		
		var remove = "<a href='#' class='fa fa-remove ingredient-remove'></a>";

		var newIng  = "<li class='ingredients-list__item'>"+remove+"<span class='ingredient-name'>"+ingr.val();+"</span></li>";
		$ingList.append(newIng);
		ingr.val('');

	}

	loadMeals();


});





