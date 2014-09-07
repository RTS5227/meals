<div class='row'>

	<div class='col-3 l-block'>
		<h2 class='headline'>Meals</h2>

		
		<a href="" class='standard-link' ng-click='open__new-meal'> Create New Meal</a>
		<hr>

		<p>Search Meals</p>
		<small>(Search by ingredient, name, type of meal...whateva)</small>
		<p> <input type='text' ng-model='searchMeals' id='searchMeals'></p>


	

<!-- <div ng-repeat='(name, note) in notes | filter:searchNotes | filter:activeNotes'> -->


		<ul class='meal-list' ng-repeat='meal in meals | filter:searchMeals'>
			<li class='meal-list__item'> <a data-id='{{meal.mealID}}' class='meal-list__item-link' href=""> {{ meal.name }} </a> </li>
		</ul>


	</div>

	<div class='col-1 l-block'></div>
	<div class='col-7 l-block'>

	
		<h2 class='headline meal-headline' ng-show="editing == false"> Add a New Meal</h2>
		<h2 class='headline meal-headline' ng-show="editing == true"> Working on Meal: {{editingName}}</h2>

		
		<div class='row'>
			<div class='col-6 l-block'>
				<p class='form-row'>
					<label for='mealName'>Meal Name:</label> 
					<input type='text' class='' id='mealName' placeholder='Meal Name'>
				</p>
			</div>
			<div class='col-6 l-block'>
				<p class='form-row p-rel'>
					<label for='mealType'>Meal Type:</label> 
					<i class="fa fa-caret-down select-dropdown__icon"></i>
					<select id='mealType' class='select-dropdown'>
						<option value='snack'>Snack</option>
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
		
				<div class='form-row'>
					<ul class='ingredients-list'>

					</ul>
				</div>


				<div class='form-row top-20'>
					<label for='instructions'>Instructions:</label>
					<textarea class='instructions' id='instructions'></textarea>
				</div>
				
				<p>
					<a href="" id='' ng-click='saveMeal($event)' class='mealSubmit button-primary button--green button--large'>Save Meal</a>
					<a href="" ng-click='deleteMeal($event)' class='mealDelete standard-link standard-link--red'>Delete this Meal</a>
				</p>
			</div>
		</div>

	</div>
	<div class='col-1 l-block'></div>

</div>