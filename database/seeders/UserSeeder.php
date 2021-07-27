<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = [[
            'name'=>'admin',
            'email'=>'admin@admin.com',
            'role'=>'1',
            'password'=>Hash::make('password'),
            'mobile_number'=>'1234567890'
        ],
        [
            'name'=>'user',
            'email'=>'user@user.com',
            'role'=>'0',
            'password'=>Hash::make('password'),
            'mobile_number'=>'0123456789'
        ]];
        DB::table('users')->insert($user);
    }
}
