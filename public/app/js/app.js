'use strict';

var app = angular.module('myApp', ['ngResource','myApp.filters','myApp.services','myApp.directives','myApp.controllers']);

app.config(function($routeProvider){
	$routeProvider.when('/', {
		templateUrl: 'app/partials/users/index.html',
		controller: 'UserListCtrl'
	});
	$routeProvider.otherwise({templateUrl:'app/partials/404.html'});
})





