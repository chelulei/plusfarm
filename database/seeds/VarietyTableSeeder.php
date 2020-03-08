<?php

use Illuminate\Database\Seeder;
use App\Variety;
use App\Plant;
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


    foreach (Variety::pluck('id') as $vId)
       {
           $plants = Plant::pluck('id');

           $pId = $plants[rand(0, $plants->count()-1)];
            Variety::where('id', $vId)
               ->update(['plant_id' => $pId]);
       }
    }
}
