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
    //     // $sessions = Session::all();
    //     // dd($sessions);
    //     return view('student.dashboard',[
    //   'sessions' => $sessions,
    // ]);

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

    public function details(){
        return view('student.details');
    }
    // public function tutordashboard(){
    //     $sessions = Auth::user()->tutorsessions;
    //     return view('tutor.tutordashboard',
    //     ['sessions' => $sessions,]
    // );
    // }
    
}
