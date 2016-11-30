memberApp.controller('ProfileController', function ($http,$scope,API_URL) {
  $scope.profile = [];
  $http.get(API_URL + "profile")
  .success(function(response) {
    $scope.profile = response;
  });
});