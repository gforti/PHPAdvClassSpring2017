(function() {
    
    'use strict';
    angular
        .module('app.address')
        .config(config);
  
    config.$inject = ['$routeProvider'];

    function config($routeProvider) {
       $routeProvider.
            when('/address', {
                templateUrl: 'js/address/addresses.template.html',
                controller: 'AddressController',
                controllerAs: 'vm'
            }).
            when('/address/:addressId', {
                templateUrl: 'js/address/address-detail.template.html',
                controller: 'AddressDetailController',
                controllerAs: 'vm'
            }).
            otherwise({
              redirectTo: '/address'
            });
    }

})();