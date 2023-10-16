<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tutor;
use App\Models\User;

class TutorsController extends Controller
{
    //
    public function index(){
        // $tutors = [
        //     [
        //         "id" => "1",
        //         "name" => "project1",
        //         "description" => "desc1",
        //     ],
        //     [
        //         "id" => "2",
        //         "name" => "project2",
        //         "description" => "desc2",
        //     ],
        // ];
        // $tutors = Tutor::all();
        // $tutors = User::where('role', 'tutor')->get();
        // $tutors = User
        return view('tutors.tutors'
      );
    }

  public function book(){
    return view('tutors.book');
  }

  public function details(){
    return view('tutors.tutor_details');
  }
  public function tutorslist(){
    $tutors = User::where('role', 'tutor')->get();
    return view('tutors.tutorslist',
    ['tutors' => $tutors, ]);
  }
}
