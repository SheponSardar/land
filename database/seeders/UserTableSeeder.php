<?php

namespace Database\Seeders;
use App\Models\User;

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
        User::create([

            'username'=>'neaz',
            'fullname'=>'Neaz Morshed',
            'email'=> 'email',
             'address'=>'address',
            'type'=>'admin',
            'phone'=>'01785286936',
            'password'=>bcrypt('neaz'),


        ]);

    }
}
