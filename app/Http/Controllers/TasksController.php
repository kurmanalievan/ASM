<?php

namespace App\Http\Controllers;

use App\Models\Session;
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
    public function tutortaskassign($id){
        $session = Session::find($id);
        return view('tutor.tutortaskassign', ['session' => $session]);
    }

    public function add(Request $request, $id){
        // dd($id);
        $session = Session::find($id);
        $title = $request->input('title');
        $date = $request->input('date');
        $points = $request->input('points');
        $instructions = $request->input('instructions');
        $new_task = new Task();
        $new_task->title = $title;
        $new_task->date = $date;
        $new_task->points = $points;
        $new_task->instructions = $instructions;
        $new_task->student_id = $session->student_id;
        $new_task->tutor_id = $session->tutor_id;
        $new_task->tutor_file = '/private/var/folders/6p/0_643y_91m7bhjjb79yppfr00000gn/T/fakerOXIhDK';
        $new_task->student_file = "/private/var/folders/6p/0_643y_91m7bhjjb79yppfr00000gn/T/fakerOXIhDK";
        $new_task->grade = 20;
        $new_task->comments = 'good';
        $new_task->save();
        // dd($new_task);
        return redirect('/tasks');
        
    }

    // public function add(Request $request)
    // {
    //     // dd('hey');
    //     $to = $request->input('to'); // Get the recipient's ID from the form
    //     $from = $request->input('from');
    //     $date = $request->input('date');
    //     $session = new Session();
    //     $session->tutor_id = auth()->id();
    //     $session->date = $date;
    //     $session->from = $from;
    //     $session->to = $to;
    //     $session->student_id = 3;
    //     $session->save();
    //     // dd($session);
    //     return redirect('/profile');
    // }
}
