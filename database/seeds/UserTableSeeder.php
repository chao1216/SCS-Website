<?php

use App\Models\User;
use App\Models\Projects\Project;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 10)->create();/*(->each(function($user) {
            $user->projects->save(factory(Project::class)->make());
        });*/
    }
}
