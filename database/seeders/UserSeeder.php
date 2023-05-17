<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Create an admin user
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
        ]);

        // Create some regular users
        User::create([
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Jane Smith',
            'email' => 'janesmith@example.com',
            'password' => Hash::make('password'),
        ]);
        User::create([
            'name' => 'sazzad ',
            'email' => 'sazzad123@gmail.com',
            'password' => Hash::make('password'),
        ]);
        User::create([
            'name' => 'sakib',
            'email' => 'sakib25@gmail.com',
            'password' => Hash::make('password'),
        ]);

        // Add more user seed data as needed
    }
}
