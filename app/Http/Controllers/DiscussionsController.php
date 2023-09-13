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
}
