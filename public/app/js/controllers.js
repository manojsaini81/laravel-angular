'use strict';

/* Controllers */

var app = angular.module('myApp.controllers', ['ui.date', 'ui.bootstrap']);


app.controller('UserListCtrl', ['$scope', 'UsersFactory', '$location',
    function ($scope, UsersFactory, $location) {  
        $scope.users = null;
        UsersFactory.query(function(res){
            $scope.users = res;
        });
        //console.log($scope.users);        
    }]);

