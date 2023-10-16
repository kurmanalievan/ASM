<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DiscussionsController extends Controller
{
    public function index(){
        $projects = "this is  a string ";
        return view('discussions.discussions', [
            'projects' => $projects,
          ]);
    }
    public function discussion(){
        $discussions = Auth::user()->discussions;
        return view('discussions.discussion', 
    ['discussions' => $discussions,]);
    }
    public function tutordiscussions(){
        return view('discussions.tutordiscussions');
    }
    public function tutordiscussion(){
        return view('discussions.tutordiscussion');
    }
}
