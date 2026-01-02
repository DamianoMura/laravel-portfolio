<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\technology;
use Faker\Factory as Faker;
use Illuminate\Support\Testing\Fakes\Fake;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        technology::create([
            'name' => 'PHP',
            'description' => 'A popular general-purpose scripting language that is especially suited to web development.',
            'font_awesome_class' => 'fa-brands fa-php',
            'color' => Faker::create()->hexColor(),

        ]);
        technology::create([
            'name' => 'Laravel',
            'description' => 'A web application framework with expressive, elegant syntax.',
            'font_awesome_class' => 'fa-brands fa-laravel',
            'color' => Faker::create()->hexColor(),
        ]);
        technology::create([
            'name' => 'MySQL',
            'description' => 'An open-source relational database management system.',
            'font_awesome_class' => 'fa-brands fa-database',
            'color' => Faker::create()->hexColor(),
        ]);
        technology::create([
            'name' => 'JavaScript Vanilla',
            'description' => 'A high-level, interpreted programming language that conforms to the ECMAScript specification.',
            'font_awesome_class' => 'fa-brands fa-js',
            'color' => Faker::create()->hexColor(),
        ]);
        technology::create([
            'name' => 'Node.js',
            'description' => 'A JavaScript runtime built on Chrome\'s V8 JavaScript engine.',
            'font_awesome_class' => 'fa-brands fa-node-js',
            'color' => Faker::create()->hexColor(),
        ]);
        technology::create([
            'name' => 'React.js',
            'description' => 'A JavaScript library for building user interfaces but also Backend',
            'font_awesome_class' => 'fa-brands fa-react',
            'color' => Faker::create()->hexColor(),
        ]);
        technology::create([
            'name' => 'Express.js',
            'description' => 'A minimal and flexible Node.js web application framework.',
            'font_awesome_class' => 'fa-brands fa-x',
            'color' => Faker::create()->hexColor(),
        ]);
        technology::create([
            'name' => 'Tailwind CSS',
            'description' => 'A utility-first CSS framework for rapidly building custom user interfaces.',
            'font_awesome_class' => 'fa-brands fa-css3',
            'color' => Faker::create()->hexColor(),
        ]);
        technology::create([
            'name' => 'Bootstrap',
            'description' => 'A popular framework for building responsive, mobile-first websites using HTML, CSS, and JS.',
            'font_awesome_class' => 'fa-brands fa-bootstrap',
            'color' => Faker::create()->hexColor(),
        ]);
        technology::create([
            'name' => 'Flutter',
            'description' => 'An open-source UI software development kit created by Google for mobiles. Creates both Android and iOS apps from a single codebase.',
            'font_awesome_class' => 'fa-brands fa-flutter',
            'color' => Faker::create()->hexColor(),
        ]);
        technology::create([
            'name' => 'HTML5',
            'description' => 'A markup language used for structuring and presenting content on the World Wide Web.',
            'font_awesome_class' => 'fa-brands fa-html5',
            'color' => Faker::create()->hexColor(),
        ]);
    }
}
