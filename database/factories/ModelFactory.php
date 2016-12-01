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
    $bio = 'Anthony Casalena is the Founder and CEO of Squarespace, which he started from his dorm room in 2003. During the company’s early years, Anthony acted as the sole engineer, designer, and support representative for the entire Squarespace platform, allowing for it to be a stable business from the outset. In addition to his main responsibilities in running the company and setting overall product strategy, he remains actively involved in the engineering, design, and product teams within the organization. Anthony holds a Bachelor of Science in Computer Science from the University of Maryland.';
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'biography' => $bio,
        'linkedInLink' => 'https://linkedin.com',
        'githubProfileLink' => 'https://github.com/',
        'picturePath' => 'path/to/user/picture',
        'remember_token' => str_random(10)
    ];
});
