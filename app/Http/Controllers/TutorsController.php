<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tutor;
use App\Models\User;

class TutorsController extends Controller
{
    //
    public function index(){
        // $tutors = Tutor::all();
        // $tutors = User::where('role', 'tutor')->get();
        // $tutors = User
        return view('student.tutors'
      );
    }

  public function book(){
    return view('student.book');
  }

  public function details(){
    return view('student.tutor_details');
  }
  public function tutorslist(){
    $tutors = User::where('role', 'tutor')->get();
    return view('tutor.tutorslist',
    ['tutors' => $tutors, ]);
  }
}
