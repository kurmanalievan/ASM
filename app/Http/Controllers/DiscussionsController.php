<?php

namespace App\Http\Controllers;

use App\Models\Discussion;
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
        $users = User::all();
        // dd($users);
        return view('discussion', 
    ['discussions' => $discussions, 'users' => $users]);
    }
    public function tutordiscussions(){
        return view('tutor.tutordiscussions');
    }
    public function tutordiscussion(){
        return view('tutor.tutordiscussion');
    }

    public function sendMessage(Request $request)
{
    // Validate the request data
    // $data = $request->validate([
    //     'to' => 'required', // Add any necessary validation rules
    //     'text' => 'required',
    // ]);
    // dd('here');
    // Assuming you have a 'messages' table, create a new message
    $to = $request->input('to'); // Get the recipient's ID from the form
    $message = $request->input('message');
    // dd($to);
    $discussion = new Discussion();
    $discussion->from = auth()->id();
    $discussion->to = $to;
    $discussion->date = now();
    $discussion->text = $message;
    $discussion->save();
    // dd($discussion);
    return redirect('/discussions');
}
}
