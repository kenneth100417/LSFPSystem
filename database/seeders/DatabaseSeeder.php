<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'firstname' => 'Admin',
            'middlename' => ' ',
            'lastname' => 'Admin',
            'birthdate' => '2000-10-10',
            'address' => 'Bulan, Sorsogon',
            'mobile_number' => '09512252399',
            'email' => 'LSFPAdmin@gmail.com',
            'password' => Hash::make('@admin'),
            'access' => '1',
            'photo' => '/img/Profile_pic/profile_temp.png',
            'status' => '1'
        ]);
    }
}
