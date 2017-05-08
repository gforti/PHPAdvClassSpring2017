(function() {
    
'use strict';
angular
    .module('app.address')
    .directive('confirmDelete', confirmDelete);
    
    confirmDelete.$inject = ['$window'];

function confirmDelete($window) {
    var directive = {
        restrict: 'EA',
        priority: 1,
        link: link
        
    };
    return directive;

    function link(scope, element, attrs) {
      
      /* this will only disable the link, not the ng-click */
       element.bind('click', function(e){         
          if( !$window.confirm('Are you Sure?') ){
            e.stopPropagation();
            e.stopImmediatePropagation();
            e.preventDefault();
          }
        });
    }
}

})();
