<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        $role = auth()->user()->role;
        if ($role === 'tutor') {
            return view('tutor.profile' );
        } elseif ($role === 'student') {
            return view('student.profile');
        }
    }
}
