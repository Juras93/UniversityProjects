var angularApp = angular.module('application', ['ngCookies']);
angularApp.controller('accountController', ['$scope', '$http', '$cookies',
function($scope, $http, $cookies){
    $scope.isUserSignIn = false;

    $scope.login = () => {
        
    };

    $scope.signUp = () => {

    };

    $scope.logout = () => {

    }
}]);