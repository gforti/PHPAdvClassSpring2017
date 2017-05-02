(function() {

'use strict';
angular
    .module('app.address')
    .factory('AddressService', AddressService);

AddressService.$inject = ['$http', 'REQUEST'];

function AddressService($http, REQUEST) {
    
    var url = REQUEST.Address;
    
    var service = {
        'getAllAddresses' : getAllAddresses,
        'getAddress' : getAddress,
        'postAddress' : postAddress,
        'deleteAddress' : deleteAddress,
        'putAddress' : putAddress
        
    };
    return service;

    ////////////
    
     function getAllAddresses() {
         return $http.get(url)
                    .then(handleSuccess, handleFailed);                    

            function handleSuccess (response) { 
                return response.data.data;
            }

            function handleFailed(error) {
                return [];
            }            
        }
     function getAddress(address_id) {
            var _url = url + '/' + address_id;
            
            return $http.get(_url)
                    .then(handleSuccess, handleFailed); 
            
            function handleSuccess (response) { 
                return response.data.data;
            }

            function handleFailed(error) {
                return {};
            }  
        }
     function postAddress(fullname, email, addressline1, city, state, zip, birthday) {
            var model = {};
            model.fullname = fullname;
            model.email = email;
            model.addressline1 = addressline1;
            model.city = city;
            model.state = state;
            model.zip = zip;
            model.birthday = birthday;
            return $http.post(url, model);
        }
        function deleteAddress(address_id) {
            var _url = url + address_id;
            return $http.delete(_url);
        }
        function putAddress(address_id, fullname, email, addressline1, city, state, zip, birthday ) {  
            var _url = url + '/' + address_id;
            var model = {};
            model.fullname = fullname;
            model.email = email;
            model.addressline1 = addressline1;
            model.city = city;
            model.state = state;
            model.zip = zip;
            model.birthday = birthday;
            return $http.put(_url, model);
        }
}

})();