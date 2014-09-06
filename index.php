<?php
error_reporting( E_ALL );
ini_set( "display_errors", 1 );

session_start();

if(!isset($_SESSION['user'])){ 
    header("Location: http://localhost:8888/apps/meals/login.php");
}

if(isset($_SESSION['user'])){
	$userEmail = $_SESSION['user'];
	$userName = $_SESSION['name'];
	$userInfo = "user = { email: '".$userEmail."', name: '".$userName."' }";
}

?>

<?php require('public/partials/global/header.php'); ?>

<body ng-app='MealsApp'>


	
	<div ng-init="<?php echo $userInfo; ?>" class='row-fluid l-primary-wrapper'>
		<div class='l-topNav' ui-view="inner-topNav"></div>
		<div class='l-sidebar' ui-view="inner-sidebar"></div>
		<div class='l-mainContent' ui-view="inner-mainContent"></div>
	</div>




	<?php require('public/partials/global/footer.php'); ?>
	


        
    </body>
</html>