<?php

namespace App\Http\Controllers;

use App\Models\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class DashboardController extends Controller
{
    public function index(){
        $student_sessions = Auth::user()->studentsessions;
        $tutor_sessions = Auth::user()->tutorsessions;
        $role = auth()->user()->role;

        if ($role === 'tutor') {
            return view('tutor.dashboard',
            ['sessions' => $tutor_sessions,]
        );
        } elseif ($role === 'student') {
            return view('student.dashboard',
            ['sessions' => $student_sessions,]
        );
        }
    }
    
    // public function tutorr(){
    //     $sessions = Auth::user()->studentsessions;
    //     return view('student.dashboard',
    //     ['sessions' => $sessions,]);
    // }

    public function details($id){
        $role = auth()->user()->role;
        $session = Session::find($id);
        if ($role === 'tutor') {
            return view('tutor.details',
            ['session' => $session,]
        );
        } elseif ($role === 'student') {
            return view('student.details',
            ['session' => $session,]
        );
        }
    }

    public function cancel($id){
       $authenticatedUserId = auth()->id();
        // dd($id);
         Session::where('id', $id)
         ->update(['student_id' => null]);
        //  dd($id);
         return redirect('/dashboard');
    }
    // public function tutordashboard(){
    //     $sessions = Auth::user()->tutorsessions;
    //     return view('tutor.tutordashboard',
    //     ['sessions' => $sessions,]
    // );
    // }
    
}
