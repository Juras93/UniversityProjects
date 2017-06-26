var angularApp = angular.module('application', ['ngAnimate', 'ngSanitize', 'ngCookies', 'ui.bootstrap']);

angularApp.controller('accountController', ['$scope', '$http', '$cookies', '$uibModal',
function($scope, $http, $cookies, $uibModal){
    var $ctrl = this;

    $ctrl.isUserSignIn = false;
}]);