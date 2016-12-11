<?php

use App\Models\Projects\Project;
use App\Models\User;
use \App\Models\Pivots\ProjectsUsers;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/**
 * This is a template for how the fake data
 * will be create by the factory methods
 * in the various database seeder files
 */


/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(ProjectsUsers::class,

    function (Faker\Generator $faker) {
        $user = User::orderByRaw("RAND()")->first();
        $project = Project::orderByRaw("RAND()")->first();
        return [
            'project_id' => $project->id,
            'user_id' => $user->id
        ];
    });