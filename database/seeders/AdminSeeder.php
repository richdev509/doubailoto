<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin YonKous',
            'email' => 'admin@yonkous.ht',
            'password' => Hash::make('Dieu098$$'),
            'role' => 'admin',
        ]);
    }
}
