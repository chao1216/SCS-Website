<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RegisterTest extends TestCase
{

    /**
     *
     * @test Ensures that when user logs in,
     * they are redirected to the home page
     * where they can see his/her name
     */
    public function register()
    {
        $this->visit('register')
            ->type('bob', 'name')
            ->type('hello1@in.com', 'email')
            ->type('hello1', 'password')
            ->type('hello1', 'password_confirmation')
            ->press('Register')
            ->seePageIs('/');

        // need to delete the newly created record otherwise the test case
        // will fail on the next run (record can't be created if it already exists)
        DB::table('users')->where('email', '=', 'hello1@in.com')->delete();
    }
}
