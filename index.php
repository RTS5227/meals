<?php
error_reporting( E_ALL );
ini_set( "display_errors", 1 );

session_start();


if(isset($_SESSION['user'])){
	echo "Loggedin Status=". $_SESSION['user'];	
}
else{
	echo "Not logged in";
}

?>


<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">        
    </head>
    <body ng-app='MealsApp'>



	
	<hr>


	<!-- LEFT COLUMN -->
	<div>	
		<div ui-view="inner-viewLeft">Inner left view</div>
	</div>

	<!-- RIGHT COLUMN -->				
	<div>
		<div ui-view="inner-viewRight">Inner Right View</div>
	</div>


	<div>
		<div ui-view="inner-full">Full Content</div>
	</div>




        

	<script src="public/js/libs/jquery.js"></script>
	<script src="public/js/libs/angular.min.js"></script>
	<script src="public/js/libs/angular-route.js"></script>
	<script src="public/js/libs/ui-router.js"></script>
	<script src="public/js/libs/helpers.js"></script>
	
	<script src="public/js/app.js"></script>
	<script src="public/js/routes.js"></script>
	<script src="public/js/controllers/main.js"></script>
	<script src="public/js/controllers/login.js"></script>
	


        
    </body>
</html>