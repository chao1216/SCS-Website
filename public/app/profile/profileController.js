// TODO: write E2E tests with protractor (http://www.protractortest.org/#/)

profileApp.controller('ProfileController',
function ($http,$scope,API_URL) {
  $scope.profile = [];
  $http.get(API_URL + "profile")
  .success(function(response) {
    $scope.profile = response;
  });

  $scope.toggle = function (modalstate) {
    $('#myModal').modal('show');
  };

  //save new record / update existing record
  $scope.save = function(id) {
    var url = API_URL + "profile/" + id;

    $http({
      method: 'POST',
      url: url,
      data: $.param($scope.profile),
      headers: {'Content-Type': 'application/x-www-form-urlencoded'}
    }).success(function(response) {
      console.log(response);
      location.reload();
    }).error(function(response) {
      console.log(response);
      alert('This is embarassing. An error has occured. Please check the log for details');
    });
  }
});