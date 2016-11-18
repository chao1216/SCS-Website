<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ProjectListingTest extends TestCase
{
    /**
     * A basic test example.
     * @test This test checks that we actually go project page
     * when we click projects link
     * @return void
     */
    public function visitProjectPage()
    {
        $this->visit('projects')
             ->seePageIs('projects');
    }

    /**
     *
     * @test Check the project page properly lists all the project
     */
    public function listingCheck()
    {
        $this->visit('projects')
             ->see('table');
    }
}
