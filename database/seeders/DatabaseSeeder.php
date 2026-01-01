<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            Post::create([
                'title' => Faker::create()->sentence,
                'content' => Faker::create()->paragraph,
                'author' => Faker::create()->name,
                'category' => Faker::create()->word,
            ]);
            Project::create([
                'title' => Faker::create()->sentence,
                'author' => Faker::create()->name(),
                'content' => Faker::create()->paragraph,
                'category' => Faker::create()->word,
            ]);
        }
    }
}
