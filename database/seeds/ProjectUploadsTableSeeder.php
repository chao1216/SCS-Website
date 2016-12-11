<?php

use App\Models\Projects\ProjectUploads;
use Illuminate\Database\Seeder;

class ProjectUploadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // creates fake data to play with/see in the views
        // the factory makes 10 ProjectUploads models
        // and persists them in the database
        factory(ProjectUploads::class, 10)->create();
    }
}
