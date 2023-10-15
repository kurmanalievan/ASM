<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TasksController extends Controller
{
    public function index(){
        $tasks = Auth::user()->tasks;
        // dd($tasks);
        return view('tasks.tasks', 
        [ 'tasks' => $tasks, ]
    );
    }
   
    public function details(){
        return view('tasks.taskdetails');
    }
   
    public function tutortasks(){
        return view('tasks.tutortasks');
    }
    public function tutortaskdetails(){
        return view('tasks.tutortaskdetails');
    }
    public function tutortaskassign(){
        return view('tasks.tutortaskassign');
    }
}
