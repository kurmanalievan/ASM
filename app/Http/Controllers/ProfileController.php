<?php

namespace App\Http\Controllers;

use App\Models\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        $validator = Validator::make($request->all(), [
            'to' => 'required',
            'from' => 'required',
            'date' => 'required|date', 
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $to = $request->input('to'); 
        $from = $request->input('from');
        $date = $request->input('date');
        $session = new Session();
        $session->tutor_id = auth()->id();
        $session->date = $date;
        $session->from = $from;
        $session->to = $to;
        $session->student_id = null;
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
