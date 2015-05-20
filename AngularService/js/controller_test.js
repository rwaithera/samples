describe('Unit: mathController', function() {
    // Load the module with MainController
    beforeEach(angular.mock.module('app'));
    
    var $controller;

    beforeEach(angular.mock.inject(function(_$controller_){
      $controller = _$controller_;
    }));
    
    describe('Divide', function () {
        it('should not divide with 0', function () {
            var scope = {};
            var controller = $controller('MathController', {$scope: $scope});
            $scope.eval();
            expect($scope.res).toEqual('false');
        });
    });
});