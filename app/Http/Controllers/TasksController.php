<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TasksController extends Controller
{
    public function index(){
        $role = auth()->user()->role;
        $student_tasks = Auth::user()->studentTasks;
        $tutor_tasks = Auth::user()->tutorTasks;
    if ($role === 'tutor') {
        return view('tutor.tasks',
        ['tasks' => $tutor_tasks,]
    );
    } elseif ($role === 'student') {
        return view('student.tasks',
        ['tasks' => $student_tasks,]
    );
    }
    }
   
    public function details($id){
        $role = auth()->user()->role;
        $task = Task::find($id);
        if ($role === 'tutor') {
            return view('tutor.taskdetails', ['task' => $task]
        );
        } elseif ($role === 'student') {
            return view('student.taskdetails', ['task' => $task] );
        }
    }
   
    // public function tutortasks(){
    //     return view('tutor.tutortasks');
    // }
    public function tutortaskdetails(){
        return view('tutor.tutortaskdetails');
    }
    public function tutortaskassign(){
        return view('tutor.tutortaskassign');
    }
}
