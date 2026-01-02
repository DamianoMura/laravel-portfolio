<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class DEVSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Demianz',
            'email' => 'demianz@jdwdev.it',
            'password' => bcrypt('asdasdasd'),
        ]);
        User::first()->roles()->attach(Role::where('name', 'DEVELOPER')->first());
    }
}
