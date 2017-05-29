'use strict';

angular.module('fr.main')
.controller('ctlApartamentos', ['$scope', '$routeParams', '$location', '$http', '$rootScope', 
    function ($scope, $routeParams, $location, $http, $rootScope) {
        $rootScope.rootUrl = 'http://jsonplaceholder.typicode.com/';
        
        $http.get('http://localhost/fincaraiz_fin/backend/consulta-departamento.php')
        .then(function(response){
            $scope.departamentos = response.data;
        })
        .catch(function(err){
            alert('');
        });
        
        
        $scope.cargarMunicipios = function(){
            $http.get('http://localhost/fincaraiz_fin/backend/consulta-municipio.php?id_departamento='+$scope.idDepartamento)
            .then(function(response){
                $scope.municipios = response.data;
            })
            .catch(function(err){
                alert('');
            })
        };
    }
 ]);

