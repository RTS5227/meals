<div class='row'>

	<div class='col-8 l-block'>


		<h1> {{ meal.name }}</h1>
		<ul>
			<li>Type: {{ meal.type }} </li>
			<li>Ingredients: {{ meal.ingredients }} </li>
			<li>Instructions: {{ meal.instructions }} </li>
		</ul>



		<hr>
		<p><a href="#" ng-click='archiveMeal()' class="mealSubmit button-primary button--green button--large">
			<i class="fa fa-archive color--white"></i>
			Archive this Meal</a>
		</p>
		



		<p>
			<a href="" ng-click='deleteMeal()' class="mealSubmit button-primary button--green button--large">
			<i class="fa fa-trash-o color--white"></i>
			Permanently Delete Meal</a>
		</p>


	</div>

</div>