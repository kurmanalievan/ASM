<?php

namespace App\Http\Controllers;

use App\Models\Session;
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

  public function book($id){
    // $selectedSession = $request->input('booked_sessions');
    $authenticatedUserId = auth()->id();
    // dd($selectedSession);
    // if (is_array($selectedSession)) {
      // $count = count($selectedSession);
      //  dd($selectedSession);
     $session = Session::find($id);
    //  dd($session);
      Session::where('id', $id)
      ->update(['student_id' => $authenticatedUserId]);
    // } else {

    // }
        return redirect('/dashboard');
  }

  public function details($id){
    $tutor = User::where('role', 'tutor')->find($id);
    $sessions = Session::where('tutor_id', $id)->get();
    return view('student.tutordetails', ['tutor' => $tutor, 'sessions' => $sessions]);
  }
  public function tutorslist(){
    $tutors = User::where('role', 'tutor')->get();
    return view('tutor.tutorslist',
    ['tutors' => $tutors, ]);
  }
}
