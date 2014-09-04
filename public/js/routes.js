// ROUTES


app.config(function($stateProvider, $urlRouterProvider) {
  $stateProvider
 
	.state('login', {
	  url: '/',
	  views: {
      	"inner-full": { 
      		templateUrl: "public/partials/users/login.php",
      		controller: 'LoginController'
      	}
	  }
	})


	// .state('home', {
	//   url: '/dashboard',
	//   controller: 'PreviewController',
	//   views: {
 //      	"inner-viewLeft": { 
 //      		templateUrl: "assets/partials/notes/notes-entry.html",
 //      		controller: 'PreviewController'
 //      	},
        
 //        "inner-viewRight": { 
 //        	templateUrl: "assets/partials/notes/notes-list-active.html",
 //        	controller: 'PreviewController'
 //        }

	//   }
	// });


   $urlRouterProvider.otherwise('/');

});