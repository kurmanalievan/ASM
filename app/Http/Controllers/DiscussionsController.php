<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DiscussionsController extends Controller
{
    public function index(){
        $discussions = Auth::user()->discussions();
        return view('discussions', [
            'discussions' => $discussions,
          ]);
    }
    public function discussion(){
        // dd(User::getTutors());
        $discussions = Auth::user()->discussions();
        return view('student.discussion', 
    ['discussions' => $discussions,]);
    }
    public function tutordiscussions(){
        return view('tutor.tutordiscussions');
    }
    public function tutordiscussion(){
        return view('tutor.tutordiscussion');
    }
}
