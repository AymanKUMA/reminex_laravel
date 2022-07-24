<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'firstname' => 'Direction',
            'lastname' => 'REMINEX',
            'email' => fake()->safeEmail(),
            'username' => 'admin',
            'email_verified_at' => now(),
            'is_admin' => 1,
            'password'=> Hash::make('admin'), // password
        ]);
    }
}
