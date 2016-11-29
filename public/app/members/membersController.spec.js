describe('MembersController', function() {

    beforeEach(module('memberApp'));

    it('should create a phones array with nothing in it', inject(function($controller) {
        var scope = {};
        var ctrl = $controller('MembersController', {$scope: scope});
        expect(scope.members.length).toBe(0);
    }));

});