'use strict';

/* App Module */

var app = angular.module('app', []);

app.service('MathService', function() {
    this.add = function(a, b) { return a + b };
    
    this.subtract = function(a, b) { return a - b };
    
    this.multiply = function(a, b) { return a * b };
    
    this.divide = function(a, b) { return a / b };
});

app.service('ExpService', function(MathService){
    
    this.square = function(a) { return MathService.multiply(a,a); };
    this.cube = function(a) { return MathService.multiply(a, MathService.multiply(a,a)); };

});

app.controller('ExpController', function($scope, ExpService) {

    $scope.Square = function() {
        $scope.answer = ExpService.square($scope.number);
    }

    $scope.Cube = function() {
        $scope.answer = ExpService.cube($scope.number);
    }
});

app.controller('MathController', function($scope, MathService) {

    $scope.Add = function() {
        $scope.answer = MathService.add($scope.a, $scope.b);
    }

    $scope.Subtract = function() {
        $scope.answer = MathService.subtract($scope.a, $scope.b);
    }
    
    $scope.Multiply = function() {
        $scope.answer = MathService.multiply($scope.a, $scope.b);
    }
    
    $scope.Divide = function() {
        $scope.answer = MathService.divide($scope.a, $scope.b);
    }
    
    $scope.eval = function(){
        if($scope==0)
            $scope.res = "true";
        else
            $scope.res = "false";
    }
});
