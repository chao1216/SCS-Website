describe('MembersController', function() {
    var $httpBackend, ctrl, API;
    var scope = {};

    // Load the module that uses membersController
    beforeEach(module('memberApp'));

    // load the controller using built-in $controller service, inject the $httpBackend service
    // and the API_URL constant defined in the memberApp
    beforeEach(inject(function ($controller, _$httpBackend_, API_URL) {
        API = API_URL;
        $httpBackend = _$httpBackend_;
        // mock a call to the API_URL/members url
        $httpBackend.expectGET(API_URL + 'members')
                    .respond([{name : "Member of Computing Club",
                               githubProfileLink : "http://github.com"}]);
        // load MembersController with the given scope
        ctrl = $controller('MembersController', {$scope: scope});
    }));

    it('should create an array of the members data for display on members page', function() {
        // members empty before flush/response
        expect(scope.members).toEqual([]);
        // have to flush to get the mocked response
        $httpBackend.flush();
        expect(scope.members).toEqual([{name : "Member of Computing Club",
                    githubProfileLink : "http://github.com"}]);
    });
});