<div class='row'>



	<div class='col-7 l-block'>
	
		<h2 class='headline meal-headline' ng-show="editing == false"> Add a New Meal</h2>
		<h2 class='headline meal-headline' ng-show="editing == true"> Working on Meal: {{editingName}}</h2>
		<hr>
		
		<div class='row'>
			<div class='col-6 l-block'>
				<p class='form-row'>
					<label for='mealName'>Meal Name:</label> 
					<input type='text' ng-model='name' id='mealName' placeholder='Meal Name'>
				</p>
			</div>
			<div class='col-6 l-block'>
				<p class='form-row p-rel'>
					<label for='mealType'>Meal Type:</label> 
					<i class="fa fa-caret-down select-dropdown__icon"></i>
					<select id='mealType' class='select-dropdown' ng-model='type'>
						<option value='snack'>Snack</option>
						<option value='side'>Side</option>
						<option value='breakfast'>Breakfast</option>
						<option value='sandwich'>Sandwich</option>

						<option value='salad'>Salad</option>
						<option value='dessert'>Dessert</option>
					</select>
				</p>
			</div>
		</div>

		<div class='row'>
			<div class='col-12 l-block'>
				<div class='form-row'>
					<label for='ingredient'>Add an ingredient: <small>(hit enter/return key to add. Double click ingredients to edit.)</small></label>  
					<input type='text' class='w-60' id='ingredient' ng-enter="addIngredient()" placeholder='Ingredient'>
				</div>
		

				<div class='form-row top-20'>
					<label for='instructions'>Instructions:</label>
					<textarea  ng-model='instructions' class='instructions' id='instructions'></textarea>
				</div>
				
				<p>
					<a href="" ng-show="editing == false" ng-click='saveMeal($event)' class='mealSubmit button-primary button--green button--large'>Save Meal</a>
					<a href="" ng-show="editing == true" ng-click='updateMeal()' class='mealSubmit button-primary button--green button--large'>Update Meal</a>
					<div class='createMeal-msg'></div>
				</p>

			</div>
		</div>

	</div>

	<div class='col-1 l-block'></div>
		<div class='col-3 l-block'>
		<h3 class='headline'>Ingredients</h3>

		<div class='form-row'>
			<ul class='ingredients-list'>
				<li ng-repeat='ingredient in ingredients track by $index' class='ingredients-list__item'>
				<a href='' ng-click='removeIngredient(ingredient)' class='fa fa-remove'></a>
				<span class='ingredient-name'>{{ingredient}}</span></li>
			</ul>
		</div>
	</div>

</div>

