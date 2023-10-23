<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tasks')->truncate();
        for($i = 0;$i < 15; $i++){
            $tutor = User::getRandomTutor();
            $student = User::getRandomStudent();
            Task::factory([
                'tutor_id' => $tutor->id,
                // 'student_id' => rand(0,1)=== 1 ? $student->id : null,  this is needed later, when the table is corrected with nullable  
                'student_id' => $student->id,
            ])->create();
        }
    }
}
