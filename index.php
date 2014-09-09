<?php
error_reporting( E_ALL );
ini_set( "display_errors", 1 );

session_start();

$root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';

$loginPage = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/meals/login.php';

if(!isset($_SESSION['user'])){ 

    header("Location: ".$loginPage);
}

if(isset($_SESSION['user'])){
	$userEmail = $_SESSION['user'];
	
	
	if(isset($_SESSION['name'])){
		$userName = $_SESSION['name'];
	}
	else{
		$userName = '';
	}

	$userInfo = "user = { email: '".$userEmail."', name: '".$userName."' }";
}

?>

<?php include_once('public/partials/global/header.php'); ?>

<body ng-app='MealsApp'>


	
	<div ng-init="<?php echo $userInfo; ?>" class='row-fluid l-primary-wrapper'>
		<div class='l-topNav' ui-view="inner-topNav"></div>
		<div class='l-sidebar' ui-view="inner-sidebar"></div>
		<div class='l-mainContent' ui-view="inner-mainContent"></div>
	</div>



	<?php include_once('public/partials/global/global-scripts.php'); ?>
	<?php include_once('public/partials/global/app-scripts.php'); ?>
	


        
    </body>
</html>