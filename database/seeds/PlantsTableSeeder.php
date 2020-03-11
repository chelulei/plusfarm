<?php

use Illuminate\Database\Seeder;
use App\Plant;
class PlantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         $plants = [

         ['name' => 'Maize','image' => "maize.jpg"],
         ['name' => 'Beans','image' => "beans.jpg"],
        ];


        foreach ($plants as $plant) {
            Plant::create($plant);
        }
    }
}
