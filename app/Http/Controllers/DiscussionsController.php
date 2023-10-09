<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiscussionsController extends Controller
{
    public function index(){
        $projects = "this is  a string ";
        return view('discussions.discussions', [
            'projects' => $projects,
          ]);
    }
    public function discussion(){
        return view('discussions.discussion');
    }
    public function tutordiscussions(){
        return view('discussions.tutordiscussions');
    }
    public function tutordiscussion(){
        return view('discussions.tutordiscussion');
    }
}
