<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash; // Needed for password hashing

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Vandaq Leng',
            'email' => 'vandaleng22@gmail.com',
            'password' => Hash::make('password1234'), // Always hash passwords
        ]);
    }
}
