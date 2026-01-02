<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FirstPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            'title' => 'First Project',
            'category_id' => 1,
            'content' => 'seedercreated project',
        ]);
        $newProject = Project::first();
        $newProject->technologies()->attach([1, 2]);

        $newProject->save();
    }
}
