<?php

namespace App\Http\Controllers;

use App\Models\Session;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        $role = auth()->user()->role;
        if ($role === 'tutor') {
            $tutor_id = auth()->id();
            $sessions = Session::where('tutor_id', $tutor_id)->get();
            return view('tutor.profile', ['sessions' => $sessions] );
        } elseif ($role === 'student') {
            return view('student.profile');
        }
    }


    public function add(Request $request)
    {
        // dd('hey');
        $to = $request->input('to'); // Get the recipient's ID from the form
        $from = $request->input('from');
        $date = $request->input('date');
        $session = new Session();
        $session->tutor_id = auth()->id();
        $session->date = $date;
        $session->from = $from;
        $session->to = $to;
        $session->student_id = 3;
        $session->save();
        // dd($session);
        return redirect('/profile');
    }

    public function delete($id){
        $availability = Session::find($id);
        $availability->delete();
        return redirect('/profile');
    }
}
