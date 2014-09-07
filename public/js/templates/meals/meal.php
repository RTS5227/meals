<a href="#/" class='standard-link'><- Back to all meals</a>

<hr>

<h2> {{ meal.name }}</h2>
<ul>
	<li>Type: {{ meal.type }} </li>
	<li>Ingredients: {{ meal.ingredients }} </li>
	<li>Instructions: {{ meal.instructions }} </li>
</ul>



<hr>
<p><a href="#" ng-click='archiveMeal()' class='standard-link standard-link--red'>Archive this Meal</a></p>
<p><a href="#" ng-click='deleteMeal()' class='standard-link standard-link--red'>Permanently delete this Meal</a></p>