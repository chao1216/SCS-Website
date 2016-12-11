// TODO: write E2E tests with protractor (http://www.protractortest.org/#/)

memberApp.controller('MembersController', function ($http,$scope,API_URL) {
  $scope.members = [];
  $http.get(API_URL + "members")
      .then(function successCallback(response) {
       $scope.members = response.data;
  });
});