<div class='row'>

	<div class='col-4 l-block'>
		<h2 class='headline'>Meals</h2>

	
		<hr>			
		<p> <input placeholder="Search Meals..." type='text' ng-model='searchMeals' id='searchMeals'></p>
		<small>(Search by ingredient, name, type of meal...whateva)</small>
		<p> <a class='standard-link' href="#/new-meal">Add a new meal</a></p>
		<ul class='meal-list'>
			<li ng-repeat='meal in meals | filter:searchMeals' class='meal-list__item'> <a href='#/meal/{{meal.mealID}}' class='meal-list__item-link'> {{ meal.name }} </a> </li>
		</ul>


	</div>

	<div class='col-1 l-block'></div>
	
	<div class='col-6 l-block'>

	
	</div>
	<div class='col-1 l-block'></div>

</div>