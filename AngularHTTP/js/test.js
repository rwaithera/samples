describe('Angular HTTP Testing', function() {
    // Load the module with MainController
    beforeEach(angular.mock.module('app'));
    
    var $controller;

    beforeEach(angular.mock.inject(function(_$controller_){
      $controller = _$controller_("studentsCtrl", {$scope: $scope});
    }));
    
    describe('Test http', function () {
        it('should test http service', function () {
            expect(http).toBeDefined();
        });
    });
});