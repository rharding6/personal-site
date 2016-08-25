/**
 * Created by robis_000 on 8/24/2016.
 */
// configure our routes
app.config(function($routeProvider, $locationProvider) {
	$routeProvider

	// route for the home page
		.when('/', {
			controller  : 'homeController',
			templateUrl : 'angular/views/home.php'
		})

		// route for the about page
		.when('/about', {
			controller  : 'aboutController',
			templateUrl : 'angular/views/about.php'
		})

		// route for the contact page
		.when('/contact', {
			controller  : 'contactController',
			templateUrl : 'angular/views/contact.php'
		})


		// otherwise redirect to home
		.otherwise({
			redirectTo: '/'
		});

	//use the HTML5 History API
	$locationProvider.html5Mode(true);
});