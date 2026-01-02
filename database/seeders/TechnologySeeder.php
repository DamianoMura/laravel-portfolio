<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\technology;

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
        ]);
        technology::create([
            'name' => 'Laravel',
            'description' => 'A web application framework with expressive, elegant syntax.',
        ]);
        technology::create([
            'name' => 'MySQL',
            'description' => 'An open-source relational database management system.',
        ]);
        technology::create([
            'name' => 'JavaScript Vanilla',
            'description' => 'A high-level, interpreted programming language that conforms to the ECMAScript specification.',
        ]);
        technology::create([
            'name' => 'Node.js',
            'description' => 'A JavaScript runtime built on Chrome\'s V8 JavaScript engine.',
        ]);
        technology::create([
            'name' => 'React.js',
            'description' => 'A JavaScript library for building user interfaces but also Backend',
        ]);
        technology::create([
            'name' => 'Express.js',
            'description' => 'A minimal and flexible Node.js web application framework.',
        ]);
        technology::create([
            'name' => 'Tailwind CSS',
            'description' => 'A utility-first CSS framework for rapidly building custom user interfaces.',
        ]);
        technology::create([
            'name' => 'Bootstrap',
            'description' => 'A popular framework for building responsive, mobile-first websites using HTML, CSS, and JS.',
        ]);
        technology::create([
            'name' => 'Flutter',
            'description' => 'An open-source UI software development kit created by Google for mobiles. Creates both Android and iOS apps from a single codebase.',
        ]);
    }
}
