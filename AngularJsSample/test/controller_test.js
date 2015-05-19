describe('Unit: mainCtrl', function() {
    // Load the module with MainController
    beforeEach(module('mainController'));
    var $ctrl, $scope;

    beforeEach(inject(function($controller, $rootScope){
      $scope = $rootScope.$new();
      $ctrl = $controller('mainCtrl',{
          $scope: scope
      });
    }));

    it('sets to true if ID is numerical', function() {
        scope.isNum();
        expect(scope.result).toEqual('true');
    });

    it('sets to false if ID is not numerical', function() {
        scope.isNum();
        expect(scope.result).toEqual('false');
    });
});