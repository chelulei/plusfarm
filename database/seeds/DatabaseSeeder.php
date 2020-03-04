<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
        // $this->call(UsersTableSeeder::class);
             PlantsTableSeeder::class,
             VarietyTableSeeder::class,
             AdminTableSeeder::class
              ]);
    }
}
