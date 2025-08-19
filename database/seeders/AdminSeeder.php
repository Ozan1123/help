<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Loan;


class AdminSeeder extends Seeder
{
    public function run(): void
    {
        // Admin
        User::updateOrCreate(
            ['email' => 'admin@perpus.com'],
            [
                'name' => 'Admin',
                'password' => Hash::make('admin123'),
                'role' => 'admin',
            ]
        );

        // User biasa
        User::updateOrCreate(
            ['email' => 'user@perpus.com'],
            [
                'name' => 'UserBiasa',
                'password' => Hash::make('user123'),
                'role' => 'user',
            ]
        );
    }
}
