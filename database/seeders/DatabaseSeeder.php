<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Comments;
use App\Models\Posts;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        // Posts::factory(5)->create([
        //     'user_id'=>5
        // ]);
        // Comments::factory(10)->create();
        Posts::factory(10)->has(Comments::factory(15))->for(User::factory())->create();
    }
}
