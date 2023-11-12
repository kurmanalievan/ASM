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
    public function discussion($id, $id2){
        // dd(User::getTutors());
        $discussions = Auth::user()->discussionPair($id, $id2);
        // $discussions = Auth::user()->discussionPair($id);
        // dd($discussions);
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
    $to = $request->input('to'); 
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
