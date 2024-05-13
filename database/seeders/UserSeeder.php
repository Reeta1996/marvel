<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    //php artisan db:seed --class=UserSeeder
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           DB::table('users')->insert([
                 'name' =>Str::random(10),
                 'email' => 'reet@gmail.com',  //Str::random(10).
                 'remember_token'=> date("y-m-d"),
               'password' => Hash::make('123456'),
               'updated_at'=> date("y-m-d"),
        ]);
    }
}
