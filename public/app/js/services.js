'use strict';

/* Services */
var app = angular.module('myApp.services', []);
app.factory('UsersFactory', function ($resource, CSRF_TOKEN) {
    return $resource('/api/v1/users', { 'csrf_token' :CSRF_TOKEN }, {
         //query: { method: 'GET', isArray: true },
         //create: { method: 'POST' }
    })
});