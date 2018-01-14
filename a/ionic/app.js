angular.module('starter', ['ionic'])

.config(function($stateProvider, $urlRouterProvider) {

    $stateProvider
        .state('home', {
          url: '',
          templateUrl: 'templates/home.html',
          controller: 'homeCtrl'
        })
        .state('about', {
          url: '/about',
          templateUrl: 'templates/about.html',
          controller: 'aboutCtrl'
        });

    // Página por defecto
    $urlRouterProvider.otherwise('');
})
.controller('homeCtrl', function($scope) {
    ;
})
controller('aboutCtrl', function($scope, aboutService) {
    $scope.author = aboutService.getAuthor();
})
.factory('aboutService', function() {
    return {
        getAuthor: function() {
            var author = { name: "Juan" };
            return author;
        },
    }
})
