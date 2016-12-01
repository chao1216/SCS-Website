<?php
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

/** @var \Illuminate\Database\Eloquent\Factory $factory */

/**
 * This is a template for how the fake data
 * will be create by the factory methods
 * in the various database seeder files
 */

$factory->define(App\ProjectUploads::class, function (Faker\Generator $faker) {
    $projects = \App\Project::orderByRaw("RAND()")->first();
    return [
        'picName' => $faker->name,
        'filePath' => '/path/to/pic_file',
        'projectId' => $projects->id
    ];
});
