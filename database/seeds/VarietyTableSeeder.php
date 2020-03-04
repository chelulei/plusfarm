<?php

use Illuminate\Database\Seeder;
use App\Variety;
class VarietyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         $varieties = [

            '614',
            '625',
            'Rose Koko',
            'Sukuma 14',
            '633',
            'R515 rice',

        ];


        foreach ($varieties as $variety) {
            Variety::create(['name' => $variety]);
        }
    }
}
