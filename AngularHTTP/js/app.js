var app = angular.module('app', []);

app.controller('studentsCtrl', function($scope, $http) {
    var url = "res/records.php";
    $http.get(url)
    .success(function (response) {$scope.students = response.records;});
});