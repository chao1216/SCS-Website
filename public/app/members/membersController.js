 memberApp.controller('MembersController', function ($http,$scope,API_URL) {
  $scope.name = "Hello world";
  $scope.members = [];
  $http.get(API_URL + "members")
      .success(function(response) {
       $scope.members = response;
      });
 });