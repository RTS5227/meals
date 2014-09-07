log('meals.js');


app.controller("MealsController", function($scope, $stateParams, $http) {

	$ingList = $('.ingredients-list')
	$('#username').html($scope.user.name);

	

	

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

		$.post(
			'models/meal-create.php',
			fields,
			function(response){
				log('response:');
				log(response);				
			}

		)
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

			postNewMeal(fields);

		}

	

	}


	$scope.addIngredient = function(){
		ingr = $('#ingredient');
		var newIng  = "<li class='ingredients-list__item'>"+ingr.val();+"</li>";
		$ingList.append(newIng);
		ingr.val('');


	}

	loadMeals();


});





