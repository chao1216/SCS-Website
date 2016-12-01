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

/**
 * This is a template for how the fake data
 * will be create by the factory methods
 * in the various database seeder files
 */


/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'biography' => 'lkdfjdslkkfjsdlfjdf',
        'linkedInLink' => 'https://linkedin.com',
        'githubProfileLink' => 'https://github.com/',
        'picturePath' => 'path/to/user/picture',
        'remember_token' => str_random(10)
    ];
});
