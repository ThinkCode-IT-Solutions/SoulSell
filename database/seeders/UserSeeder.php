<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Shahzad Farooq',
            'email' => 'admin@soulsell.com',

            'role' => 1,
            'password' => Hash::make('password'),
        ]);

        User::factory()->create([
            'name' => 'Shahzad Farooq',
            'email' => 'user@soulsell.com',

            'role' => 0,
            'password' => Hash::make('password'),
        ]);

        User::factory(10)->create();


    }
}
