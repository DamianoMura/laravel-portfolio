<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use App\Models\Project;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Testing\Fakes\Fake;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Category::create([
            'name' => "Unspecified",
            'description' => "a project that has no category ",
        ]);


        User::create([
            'name' => 'Demianz',
            'email' => 'demianz@jdwdev.it',
            'password' => bcrypt('asdasdasd'),
        ]);

        Role::create([
            'name' => 'DEVELOPER',
        ]);
        Role::create([
            'name' => 'admin',
        ]);
        Role::create([
            'name' => 'user',
        ]);
        User::first()->roles()->attach(Role::where('name', 'DEVELOPER')->first());


        for ($i = 0; $i < 3; $i++) {
            Post::create([
                'title' => Faker::create()->sentence,
                'content' => Faker::create()->paragraph,
                'author' => Faker::create()->name(),
                'category' => Faker::create()->name(),
            ]);
            Project::create([
                'title' => Faker::create()->sentence,
                'author' => Faker::create()->name(),
                'content' => Faker::create()->paragraph,
            ]);
        }
    }
}
