var app = angular.module('myApp', ['ngRoute'])
.config(['$routeProvider', function($routeProvider) {
	$routeProvider
	.when('/', { templateUrl: 'views/person.html' })
	.when('/person', { templateUrl: 'views/person.html' })
	.when('/companies', { templateUrl: 'views/companies.html' })
	.when('/trusts', { templateUrl: 'views/trusts.html' })
	.when('/partnerships', { templateUrl: 'views/partnerships.html' })
	.when('/addresses', { templateUrl: 'views/addresses.html' })
	
	.when('/signature', { templateUrl: 'views/signature.html' });
}]);