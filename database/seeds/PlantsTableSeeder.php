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

            'Maize',
            'Beans',
            'Tea',
            'Sukuma Wiki',
            'Potatoes',
            'Rice',

        ];


        foreach ($plants as $plant) {
            Plant::create(['name' => $plant]);
        }
    }
}
