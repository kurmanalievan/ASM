<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        return view('student.profile');
    }
    public function tutor(){
        return view('tutor.tutor');
    }
}
