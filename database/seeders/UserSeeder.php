<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert 10 users
        for ($i = 1; $i <= 10; $i++) {
            DB::table('users')->insert([
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'password' => bcrypt('password' . $i),
            'role' => fake()->randomElement(['admin', 'user']), // Randomly assign 'admin' or 'user'
            ]);
        }


    }
}
