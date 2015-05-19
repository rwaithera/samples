'use strict';

/* Controllers */

var mainController = angular.module('mainController', []);

mainController.controller('mainCtrl', mainCtrl);

function mainCtrl($scope) {
 $scope.items = [{
        name: { 
            firstname: 'Ruth',
            lastname: 'Waithera',
            surname: 'Wachira'
        },
        id: 9999,
        address: { 
            street: 'state house avenue',
            postalcode: '00100'
        }
    },{
        name: { 
            firstname: 'Ken',
            lastname: 'Mud',
            surname: 'Mwanzi'
        },
        id: 8888,
        address: { 
            street: 'ngong road cresent',
            postalcode: '00200'
        }
    },{
        name: { 
            firstname: 'Christine',
            lastname: 'Merkel',
            surname: 'Pitt'
        },
        id: 7777,
        address: { 
            street: 'road way',
            postalcode: '00300'
        }
    },{
        name: { 
            firstname: 'Jacquiline',
            lastname: 'Houston',
            surname: 'Jackson'
        },
        id: 6666,
        address: { 
            street: 'heroes way',
            postalcode: '00400'
        }
    }];
    
    var num = $scope.id;
    $scope.isNum = function isNumeric(num) {
        if(isNaN(n))
          {
           $scope.result = false;
          }
        else
         {
          $scope.result = true;
         }
    }
}
