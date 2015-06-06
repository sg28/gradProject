var app = angular.module('plunker', []);

app.controller('MainCtrl', function($scope, $http) {
   
  var url = 'http://private-a73e-aquentuxsociety.apiary-mock.com/members';
  
  $http.get(url).success(function(response) {
    $scope.members = response;
  });

  $scope.open = function(member) {
    if ($scope.isOpen(member)) {
      $scope.opened = undefined;
    } else {
      $scope.opened = member;
    }
  };

  $scope.isOpen = function(member) {
    return $scope.opened === member;
  };


});