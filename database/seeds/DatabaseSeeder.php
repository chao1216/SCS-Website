<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
         * Put all calls to database seeder files here
         * or else your seed run functions won't run
         */

        $this->call(ProjectTableSeeder::class);
        $this->call(ProjectUploadsTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(ProjectsUsersTableSeeder::class);
    }
}
