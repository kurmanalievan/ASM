<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use App\Models\Session;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class SessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sessions')->truncate();
        for($i = 0;$i < 15; $i++){
            $tutor = User::getRandomTutor();
            $student = User::getRandomStudent();
            Session::factory([
                'tutor_id' => $tutor->id,
                'student_id' => rand(0,1) === 1 ? $student->id : null,
                // 'student_id' => $student->id,
            ])->create();
        }
        // Session::factory(15)->create()->each(function());
    }
}
