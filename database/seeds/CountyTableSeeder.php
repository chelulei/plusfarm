<?php

use Illuminate\Database\Seeder;
use App\County;
class CountyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $counties = [
        'Mombasa',
        'Kwale',
        'Kilifi',
        'Tana-River',
        'Lamu',
        'Taita-Taveta',
        'Garissa',
        'Wajir',
        'Mandera',
        'Marsabit',
        'Isiolo',
        'Meru',
        'Tharaka-Nithi',
        'Embu',
        'Kitui',
        'Machakos',
        'Makueni',
        'Nyandarua',
        'Nyeri',
        'Kirinyaga',
        'Muranga',
        'Kiambu',
        'Turkana',
        'West Pokot',
        'Samburu',
        'Trans-Nzoia',
        'Uasin Gishu',
        'Elgeyo-Marakwet',
        'Nandi',
        'Baringo',
        'Laikipia',
        'Nakuru',
        'Narok',
        'Kajiado',
        'Kericho',
        'Bomet',
        'Kakamega',
        'Vihiga',
        'Bungoma',
        'Busia',
        'Siaya',
        'Kisumu',
        'Homa Bay',
        'Migori',
        'Kisii',
        'Nyamira',
        'Nairobi',

        ];


        foreach ($counties as $county) {
            County::create(['name' => $county]);
        }
    }
}
