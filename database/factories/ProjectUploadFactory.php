<?php

use App\Models\Projects\ProjectUploads;
use App\Models\Projects\Project;

/**
 * This is a template for how the fake data
 * will be create by the factory methods
 * in the various database seeder files
 */

$factory->define(ProjectUploads::class, function (Faker\Generator $faker) {
    $projects = Project::orderByRaw("RAND()")->first();
    return [
        'uploadName' => $faker->name,
        'filePath' => '/path/to/pic_file',
        'project_id' => $projects->id
    ];
});
