<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use App\Models\Project;
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
            'name' => "Boolean Course Exercises",
            'description' => "Exercises from the Boolean Main Course, covering all the main topics. as HTML, CSS, JavaScript, MySQL , Express.js, React.js, Node.js",
        ]);
        Category::create([
            'name' => "Boolean Specialisation Exercises",
            'description' => "Exercises from the Boolean Specialisation Course, about PHP and Laravel Framework.",
        ]);
        Category::create([
            'name' => "Personal Projects",
            'description' => "Personal projects built with all the technologies learned during the Boolean Course and through self-learning.",
        ]);
        Category::create([
            'name' => "Funny Projects",
            'description' => "Projects made just for fun or as experiments.",
        ]);

        User::create([
            'name' => 'Demianz',
            'email' => 'demianz@jdwdev.it',
            'password' => bcrypt('asdasdasd'),
        ]);




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
                'category_id' => Category::inRandomOrder()->first()->id,
            ]);
        }
    }
}
