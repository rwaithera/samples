'use strict';

/* App Module */

var app = angular.module('app', []);

app.controller('formController', formController);

function formController($scope){
    $scope.table = [];
    $scope.id = 0;
    
    $scope.save = function(user){
        if($scope.user.id == null){
            $scope.table.push(angular.copy(user));
        }else{
            for(i in $scope.table){
                $scope.table[i] = angular.copy(user); 
            }
        }
    }
    
    $scope.add = function(){
        $scope.user = {};
    }
    
    $scope.delete = function(index){
        $scope.table.splice(index,1);
    }
    
}
