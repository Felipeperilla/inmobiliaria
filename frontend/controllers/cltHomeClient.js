'use strict';

angular.module('fr.main')
.controller('ctlHomeClient', ['$scope', '$routeParams', '$location', '$http', '$rootScope', 
    function ($scope, $routeParams, $location, $http, $rootScope) {
        $rootScope.rootUrl = 'http://jsonplaceholder.typicode.com/';
        
        
    }
 ]);