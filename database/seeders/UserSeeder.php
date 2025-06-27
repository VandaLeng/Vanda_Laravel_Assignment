<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'vandaaleng22@gmail.com'], // search by email
            [
                'name' => 'VandaaLeng',
                'password' => Hash::make('password1234'),
            ]
        );
    }
}
