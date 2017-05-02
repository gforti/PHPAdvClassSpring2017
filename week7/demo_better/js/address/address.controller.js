(function () {
    
    'use strict';
    angular
        .module('app.address')
        .controller('AddressController', AddressController);

    AddressController.$inject = ['AddressService'];

    function AddressController(AddressService) {
        var vm = this;

        vm.addresses = [];

        activate();

        ////////////

        function activate() {
            AddressService.getAllAddresses().then(function (response) {
                vm.addresses = response;
            });
        }

    }
    
})();