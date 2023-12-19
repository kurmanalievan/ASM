<?php

namespace App\Http\Controllers;

use App\Models\Session;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class TasksController extends Controller
{
    public function index(){
        $role = auth()->user()->role;
        $upcoming_student_tasks = Auth::user()->upcomingStudentTasks;
        $past_student_tasks = Auth::user()->pastStudentTasks;
        
        $tutor_submitted_tasks = Auth::user()->tutorSubmittedTasks;
        $tutor_graded_tasks = Auth::user()->tutorGradedTasks;
    if ($role === 'tutor') {
        return view('tutor.tasks',
        ['submitted_tasks' => $tutor_submitted_tasks, 'graded_tasks' => $tutor_graded_tasks]
    );
    } elseif ($role === 'student') {
        return view('student.tasks',
        ['upcoming_tasks' => $upcoming_student_tasks, 'past_tasks' => $past_student_tasks]
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
    public function past_task_details($id){
        $role = auth()->user()->role;
        $task = Task::find($id);
        if ($role === 'tutor') {
            return view('tutor.taskdetailsgraded', ['task' => $task]
        );
        } elseif ($role === 'student') {
            return view('student.pasttaskdetails', ['task' => $task] );
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
        $new_task->tutor_file = null;
        $new_task->student_file = null;
        $new_task->grade = null;
        $new_task->comments = null;
        $new_task->save();
        // dd($new_task);
        return redirect('/dashboard');
        
    }
    public function delete($id){
        $task = Task::find($id);
        $task->delete();
        return redirect('/tasks');
    }

    public function upload(Request $request, $task_id){
        $task = Task::find($task_id);
        $validator = Validator::make($request->all(), [
            'file' => 'required|file', 
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        if($request->hasFile('file')){
            $file = $request->file('file');
            $filePath = $file->store('student_files', 'public'); 
            $task->update(['student_file' => $filePath]);
        }
        return redirect('/tasks');
    }

    public function download_file($task_id){
        $task = Task::find($task_id);
        
        if($task && $task->student_file){
            $filePath = $task->student_file;
            $fileName = basename($filePath);
            return Storage::disk('public')->download($filePath, $fileName);
        }
    }

    public function grade_task($task_id)
    {
        $task = Task::find($task_id);
        $points = request()->input('points');
        $task->update(['grade' => $points]);

    return redirect('/tasks');
   }
}
