// TODO: write E2E tests with protractor (http://www.protractortest.org/#/)

profileApp.controller('ProfileController',
function ($http,$scope,API_URL) {
  $scope.profile = [];
  // query the api to get this members profile
  // NOTE: this is only possible if the user is logged in,
  // user can't see profile if not logged in
  $http.get(API_URL + "profile")
  .then(function(response) {
    $scope.profile = response.data;
  });



  /**
   * Show the profile credentials update modal
   */
  $scope.showCredentialForm = function () {
    $('#modal-credential').modal('show');
  };

  $scope.showProjectForm = function () {
    $('#modal-project').modal('show');
  };

  /**
   * Has this user created any projects?
   * @returns {boolean} if user has helped build projects
   */
  $scope.hasProjects = function () {
    return $scope.profile.length != 0;
  };

  /**
   * save new record / update existing record from the modal form
   */
  $scope.save = function(id) {
    var url = API_URL + "profile/" + id;

    $http({
      method: 'POST',
      url: url,
      data: $.param($scope.profile),
      headers: {'Content-Type': 'application/x-www-form-urlencoded'}
    }).then(function(response) {
      console.log(response);
      location.reload();
    }).error(function(response) {
      console.log(response);
    });
  }
});