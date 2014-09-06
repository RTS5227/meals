
<div class='inner-content col-50'>
	<h1>Update Your Profile</h1>
	<hr>

	<p class='form-row'>
		<label for='name'>Name: </label> <input ng-model='user.name' type='text' id='name' name='name'>
	</p>

	<p class='form-row'>
		<label for='avatar'>Upload a profile image: </label> <input type='file' id='avatar'>
	</p>

	<p class='form-row'>
		<a class='button-primary' href="" ng-click="updateProfile()">Update</a>
	</p>

</div>