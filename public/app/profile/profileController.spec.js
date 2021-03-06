/*

Helpful tutorial for later
 http://www.bradoncode.com/blog/2015/06/26/unit-testing-http-ngmock-fundamentals/
 http://www.bradoncode.com/blog/2015/06/16/unit-test-http-ngmock-passthrough/

 */

describe('ProfileController', function() {
  var $httpBackend, API;
  var scope = {};

  // Load the module that uses membersController
  beforeEach(module('profileApp'));

  // load the controller using built-in $controller service, inject the $httpBackend service
  // and the API_URL constant defined in the memberApp
  beforeEach(inject(function ($controller, _$httpBackend_, API_URL) {
    API = API_URL;
    $httpBackend = _$httpBackend_;
    // mock a call to the API_URL/members url
    $httpBackend.expectGET(API_URL + 'profile')
       .respond([{profile: "Member Profile Data"}]);
    // load MembersController with the given scope
    $controller('ProfileController', {$scope: scope});
  }));

  it('should create a profile array containing member profile data', function() {
    expect(scope.profile).toEqual([]);
    // have to flush to get the mocked response
    $httpBackend.flush();
    expect(scope.profile)
       .toEqual([{profile: "Member Profile Data"}]);
  });
});