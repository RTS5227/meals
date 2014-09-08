<div class='row'>

	<div class='col-3 l-block'>
		<h2 class='headline'>Meals</h2>

	
		<hr>			
		<p> <input placeholder="Search Meals..." type='text' ng-model='searchMeals' id='searchMeals'></p>
		<small>(Search by ingredient, name, type of meal...whateva)</small>
		
		<ul class='meal-list sortable'>
			<li ng-repeat='meal in meals | filter:searchMeals' class='meal-list__item'> <a href='#/meal/{{meal.mealID}}' class='meal-list__item-link'> {{ meal.name }} </a> </li>
		</ul>


	</div>

	
	<div class='col-9 l-block'>

		<div class='row'>
			
			<div class='col-4 l-block'>
				<div class='meal-day'>
					<p class='meal-day__headline'>Monday</p>
					<ul class='meal-day__meals sortable'>
						
					</ul>
				</div>
			</div>

			<div class='col-4 l-block'>
				<div class='meal-day'>
					<p class='meal-day__headline'>Tuesday</p>
					<ul class='meal-day__meals sortable'>
						
					</ul>
				</div>
			</div>

			<div class='col-4 l-block'>
				<div class='meal-day'>
					<p class='meal-day__headline'>Wednesday</p>
					<ul class='meal-day__meals sortable'>
						
					</ul>
				</div>
			</div>

		</div>


		<div class='row'>
			
			<div class='col-4 l-block'>
				<div class='meal-day'>
					<p class='meal-day__headline'>Thursday</p>
					<ul class='meal-day__meals sortable'>

					</ul>
				</div>
			</div>

			<div class='col-4 l-block'>
				<div class='meal-day'>
					<p class='meal-day__headline'>Friday</p>
					<ul class='meal-day__meals sortable'>
						
					</ul>
				</div>
			</div>

			<div class='col-4 l-block'>
				<div class='meal-day'>
					<p class='meal-day__headline'>Saturday / Sunday</p>
					<ul class='meal-day__meals sortable'>
						
					</ul>
				</div>
			</div>

		</div>

		

	
	</div>

</div>