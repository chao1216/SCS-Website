<?php


use App\Models\Projects\Project;
use App\Models\User;
use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // creates fake data to play with/see in the views
        // the factory makes 10 Project models
        // and persists them in the database
        factory(Project::class, 10)->create();/*->each(function($project) {
            //$project->users->save(factory(User::class)->make());
        });;*/
    }
}
