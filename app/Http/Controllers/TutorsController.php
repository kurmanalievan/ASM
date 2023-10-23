<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tutor;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class TutorsController extends Controller
{
    //
    public function index(){
        // $tutors = Tutor::all();
        $tutors = User::where('role', 'tutor')->get();
        // $tutors = User
        // $student_tutors = Auth::user()->studentsessions;
        // $tutor_tutors = Auth::user()->tutorsessions;
      $role = auth()->user()->role;

    if ($role === 'tutor') {
        return view('tutor.tutors',
        ['tutors' => $tutors,]
    );
    } elseif ($role === 'student') {
        return view('student.tutors',
        ['tutors' => $tutors,]
    );
    }
    }

  public function book(){
    return view('student.book');
  }

  public function details($id){
    $tutor = User::where('role', 'tutor')->find($id);
    return view('student.tutordetails', ['tutor' => $tutor]);
  }
  public function tutorslist(){
    $tutors = User::where('role', 'tutor')->get();
    return view('tutor.tutorslist',
    ['tutors' => $tutors, ]);
  }
}
