// ROUTES


app.config(function($stateProvider, $urlRouterProvider) {
  $stateProvider
 

	// .state('home', {
	//   url: '/,',
	//   views: {
 //      	"inner-sidebar": { 
 //      		templateUrl: "public/js/templates/meals/sidebar.php",
 //          controller: 'SidebarController'
 //      	},

 //      	"inner-topNav": { 
 //      		templateUrl: "public/js/templates/global/topNav.php"
 //      	},
        
 //        "inner-mainContent": { 
 //        	templateUrl: "public/js/templates/meals/meal-planner.php",
 //        	controller: 'MealsController'
 //        }

	//   }
	// })


  .state('meal-viewer', {
    url: '/',
    views: {
        "inner-sidebar": { 
          templateUrl: "public/js/templates/meals/sidebar.php",
          controller: 'SidebarController'
        },

        "inner-topNav": { 
          templateUrl: "public/js/templates/global/topNav.php"
        },
        
        "inner-mainContent": { 
          templateUrl: "public/js/templates/meals/my-meals.php",
          controller: 'MealsController'
        }

    }
  })

  .state('profile', {
    url: '/profile',
    views: {
        "inner-sidebar": { 
          templateUrl: "public/js/templates/meals/sidebar.php",
          controller: 'SidebarController'
        },

        "inner-topNav": { 
          templateUrl: "public/js/templates/global/topNav.php"
        },
        
        "inner-mainContent": { 
          templateUrl: "public/js/templates/users/profile.php",
          controller: 'ProfileController'
        }

    }
  })

  .state('style-guide', {
    url: '/style-guide',
    views: {
        "inner-sidebar": { 
          templateUrl: "public/js/templates/meals/sidebar.php",
          controller: 'SidebarController'
        },

        "inner-topNav": { 
          templateUrl: "public/js/templates/global/topNav.php"
        },
        
        "inner-mainContent": { 
          templateUrl: "public/js/templates/meals/style-guide.php"
        }

    }
  });


   $urlRouterProvider.otherwise('/');

});