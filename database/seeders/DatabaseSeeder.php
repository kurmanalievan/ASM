<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Tutor;
use Illuminate\Database\Seeder;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'admin',
            'email' => 'admin@com',
            'password' => bcrypt('password'),
            'role' => 'admin'
        ]);
        
        User::create([
            'name' => 'student',
            'email' => 'student@com',
            'password' => bcrypt('password'),
            'role' => 'student'
        ]);

        User::create([
            'name' => 'teacher',
            'email' => 'teacher@com',
            'password' => bcrypt('password'),
            'role' => 'teacher'
        ]);

    }
}
