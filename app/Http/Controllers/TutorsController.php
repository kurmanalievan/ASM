<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tutor;

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
        $tutors = Tutor::all();
        return view('tutors.tutors', [
            "tutors" => $tutors,
        ]);
    }

  public function book(){
    return view('tutors.book');
  }
}
