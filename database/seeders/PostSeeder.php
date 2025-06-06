<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        \App\Models\Post::factory(10)->create();

        // Optionally, you can also call the UserSeeder if you want to ensure users exist before creating posts
        // $this->call(UserSeeder::class);
    }
}
