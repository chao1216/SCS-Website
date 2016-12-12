<?php

use Illuminate\Database\Seeder;

class ProjectsUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Pivots\ProjectsUsers::class, 10)->create();
    }

}
