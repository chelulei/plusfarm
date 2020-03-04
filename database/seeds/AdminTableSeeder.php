<?php

use Illuminate\Database\Seeder;
use App\User;
class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         $user = ['name' => 'superadmin',
            'email' => 'admin@gmail.com', 'password' =>Hash::make('123456')];
        $user = User::create($user);
    }
}
