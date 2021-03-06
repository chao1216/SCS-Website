<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Models\User;

class ApiProfileControllerTest extends TestCase
{

    const API_URL = 'api/v1/';

    protected $testUser;

    /**
     * Framework method: Runs before every test case in
     * the class
     * https://phpunit.de/manual/current/en/fixtures.html
     */
    public function setUp()
    {

        $this->createApplication();
        $this->testUser = factory(User::class)->create();
        parent::setUp();
    }

    /**
     * Framework method: Runs after every test case in
     * the class
     * https://phpunit.de/manual/current/en/fixtures.html
     */
    public function tearDown()
    {
        $this->testUser->delete();
        parent::tearDown(); // TODO: Change the autogenerated stub
    }

    /**
     * A basic test example.
     * @test
     * Asserts that the ApiProfileController
     * responds with the authenticated user's profile data
     * $testUser in this case is authenticated b/c of login
     * at the API_URL/profile link (GET Request)
     * @return void
     */
    public function assertProfileAttributesReturned()
    {
        $returnData = User::with('projects')->find($this->testUser->id);
        $this->login()
            ->visit(ApiProfileControllerTest::API_URL . 'profile')
            ->see($returnData);
    }

    public function login()
    {
        return $this->visit('login')
            ->type($this->testUser->email, 'email')
            ->type('secret', 'password')
            ->press('Login');
    }
}
