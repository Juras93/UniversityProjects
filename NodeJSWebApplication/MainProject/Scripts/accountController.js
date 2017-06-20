var angularApp = angular.module('application', ['ngAnimate', 'ngSanitize', 'ngCookies', 'ui.bootstrap']);

angularApp.controller('ModalInstanceCtrl', function ($uibModalInstance) {
  var $accountCtrl = this;

  $accountCtrl.ok = function () {

  };

  $accountCtrl.cancel = function () {
    $uibModalInstance.dismiss('cancel');
  };
});

angularApp.component('loginModalComponent', {
    templateUrl: 'loginModal.html',
    bindings: {
        resolve: '<',
        close: '&',
        dismiss: '&'
    },
    controller: () => {
        var $accountCtrl = this;

        $accountCtrl.$onInit = () => {

        };

        $accountCtrl.okButton = () => {
            console.log('Liiiii');
            //HTTP request about login
        };

        $accountCtrl.closeButton = () => {
            $accountCtrl.close();
        }
    }
});


angularApp.controller('accountController', ['$scope', '$http', '$cookies', '$uibModal',
function($scope, $http, $cookies, $uibModal){
    var $accountCtrl = this;

    $accountCtrl.isUserSignIn = false;

    $accountCtrl.loginModalOpen = () => {
        var modalInstance = $uibModal.open({
            animation: true,
            component: 'loginModalComponent'
        });
    };

    $accountCtrl.signUp = () => {

    };

    $accountCtrl.logout = () => {

    }
}]);