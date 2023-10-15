<?php

namespace App\Http\Controllers;

use App\Models\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $sessions = Auth::user()->sessions;
        // $sessions = Session::all();
        // dd($sessions);
        return view('dashboard.dashboard',[
      'sessions' => $sessions,
    ]);
    }

    public function details(){
        return view('dashboard.details');
    }
    public function tutordashboard(){
        return view('dashboard.tutordashboard');
    }
    
}
