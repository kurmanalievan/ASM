<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TasksController extends Controller
{
    public function index(){
        $tasks = Auth::user()->tasks;
        // dd($tasks);
        return view('tutor.tasks', 
        [ 'tasks' => $tasks, ]
    );
    }
   
    public function details(){
        return view('student.taskdetails');
    }
   
    public function tutortasks(){
        return view('tutor.tutortasks');
    }
    public function tutortaskdetails(){
        return view('tutor.tutortaskdetails');
    }
    public function tutortaskassign(){
        return view('tutor.tutortaskassign');
    }
}
