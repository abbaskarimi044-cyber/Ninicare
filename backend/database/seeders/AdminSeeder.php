<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'admin@ninicare.ir'],
            [
                'name' => 'System Admin',
                'password' => Hash::make('Admin@123456'),
            ]
        )->assignRole('Admin');
    }
}