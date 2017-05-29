/* global angular */

'use strict';
angular.module('fr.main', [ 'ngRoute','ui.bootstrap']);

angular.module('fr.main').config(['$routeProvider', '$locationProvider',
    function($routeProvider, $locationProvider) {
        
        $routeProvider
        .when('/',{
            controller: 'ctlHome',
            templateUrl: 'templates/home.html'
        })

        .when('/casas',{
            controller: 'ctlCasas',
            templateUrl: 'templates/casas.html'
        })
        .when('/apartamentos',{
            controller: 'ctlApartamentos',
            templateUrl: 'templates/apartamentos.html'
        })
        .when('/fincas',{
            controller: 'ctlFincas',
            templateUrl: 'templates/fincas.html'
        })
        .when('/lotes',{
            controller: 'ctlLotes',
            templateUrl: 'templates/lotes.html'
        })
        .otherwise({
            templateUrl: 'templates/404.html'
        });
    }]);

angular.element(document).ready(function() {
    angular.bootstrap(document, ['fr.main']);
});

