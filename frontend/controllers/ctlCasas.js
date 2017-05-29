'use strict';

angular.module('fr.main')
.controller('ctlCasas', ['$scope', '$routeParams', '$location', '$http', '$rootScope', 
    function ($scope, $routeParams, $location, $http, $rootScope) {
        $rootScope.rootUrl = 'http://jsonplaceholder.typicode.com/';
        
        $http.get('http://localhost/fincaraiz/backend/consulta-departamento.php')
        .then(function(response){
            $scope.departamentos = response.data;
        })
        .catch(function(err){
            alert('error = '+JSON.stringify(err));
        });
        
        
        $scope.cargarMunicipios = function(){
            $http.get('http://localhost/fincaraiz/backend/consulta-municipio.php?id_departamento='+$scope.idDepartamento)
            .then(function(response){
                $scope.municipios = response.data;
            })
            .catch(function(err){
                alert('');
            })
        };

        $scope.filtroCiudad = function(){
            $http.get('http://localhost/fincaraiz/backend/consulta-id-ciudad.php?id_ciudad='+$scope.idCiudad)
            .then(function(response){
                $scope.inmueblesCiudad = response.data;
            })
            .catch(function(err){
                alert('what?');
            })
        };

        $scope.filtrosBusquedad = function(){
            $http.get('http://localhost/fincaraiz/backend/consulta-filtros-busquedad.php?id_eleccion='+$scope.eleccion)
            .then(function(response){
                $scope.resultadoFiltro = response.data;
            })
            .catch(function(err){
                alert("");
            })
        };


        



        
    }
 ]);