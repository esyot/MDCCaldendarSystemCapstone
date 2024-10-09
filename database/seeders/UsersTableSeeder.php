<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'user' => 'admin',
                'f_name' => 'Admin',
                'l_name' => 'User',
                'password' => Hash::make('12345678'), // Use a secure password
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user' => 'user',
                'f_name' => 'Regular',
                'l_name' => 'User',
                'password' => Hash::make('12345678'), // Use a secure password
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
