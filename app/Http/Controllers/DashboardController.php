<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard.dashboard');
    }

    public function details(){
        return view('dashboard.details');
    }
    public function tutordashboard(){
        return view('dashboard.tutordashboard');
    }
    
}
