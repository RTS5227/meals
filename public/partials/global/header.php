
<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <link rel="stylesheet" href="public/css/bootstrap.3.2.css">
        <link rel="stylesheet" href="public/css/dataTables.css">
        <link rel="stylesheet" href="public/css/main.css">

    </head>
    <body ng-app='MealsApp'>

	<?php if(isset($_SESSION['user'])){ ?>
		<a href="logout.php">Log Out</a>
	<?php } ?>