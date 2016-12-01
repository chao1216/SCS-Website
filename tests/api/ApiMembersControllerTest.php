<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\User;

class ApiMembersControllerTest extends TestCase
{

    const API_URL = 'api/v1/';
    /**
     * A basic test example.
     * @test
     * Asserts that a listing of all users profiles (in JSON)
     * can be retrieved at API_URL/members
     * @return void
     */
    public function assertProfileAttributesReturned()
    {
        $returnData = User::all();
        $this->visit(ApiMembersControllerTest::API_URL . 'members')
            ->see($returnData);

    }
}
