var angularApp = angular.module('application', ['ngAnimate', 'ngSanitize', 'ngCookies', 'ui.bootstrap']);

angularApp.component('signUpModalComponent', {
    templateUrl: 'signUpModal.html',
    bindings: {
        resolve: '<',
        close: '&',
        dismiss: '&'
    },
    controller: ($scope) => {
        $signUp = this;
        $scope.$onInit = () => {

        };

        $scope.okButton = () => {
            console.log('Liiiii');
            //HTTP request about login
        };

        $scope.closeButton = () => {
            $signUp.close();
        }
    },
    controllerAs: '$signUp'
});

angularApp.component('signInModalComponent', {
    templateUrl: 'signinModal.html',
    bindings: {
        resolve: '<',
        close: '&',
        dismiss: '&'
    },
    controller: ($scope) => {
        $signIn = this;
        $scope.$onInit = () => {

        };

        $scope.okButton = () => {
            console.log('Liiiii');
            //HTTP request about login
        };

        $scope.closeButton = () => {
            $signIn.close();
        }
    },
    controllerAs: '$signIn'
});

angularApp.component('infoModalComponent', {
    templateUrl: 'infoModal.html',
    bindings: {
        resolve: '<',
        close: '&',
        dismiss: '&'
    },
    controller: ($scope) => {
        $info = this;
        $scope.$onInit = () => {

        };

        $scope.okButton = () => {
            console.log('Liiiii');
            //HTTP request about login
        };

        $scope.closeButton = () => {
            $info.close();
        }
    },
    controllerAs: '$info'
});

angularApp.controller('accountController', ['$scope', '$http', '$cookies', '$uibModal',
function($scope, $http, $cookies, $uibModal){
    var $ctrl = this;

    $ctrl.isUserSignIn = false;

    $ctrl.loginModalOpen = () => {
        var modalInstance = $uibModal.open({
            animation: true,
            component: 'loginModalComponent',
            resolve: {
                
            }
        });
    };
}]);