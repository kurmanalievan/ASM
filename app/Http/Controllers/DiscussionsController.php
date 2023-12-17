<?php

namespace App\Http\Controllers;

use App\Models\Discussion;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class DiscussionsController extends Controller
{
    public function index(){
        $discussions = Auth::user()->discussions();
        
        $users = User::all();
        return view('discussions', [
            'discussions' => $discussions,
            'users' => $users
          ]);
    }
    public function discussion($id, $id2){
        $discussions = Auth::user()->discussionPair($id, $id2);
        // dd($discussions);
        $users = User::all();
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
    $validator = Validator::make($request->all(), [
        'to' => 'required', 
        'message' => 'required|min:1', 
    ], [
        'message.required' => 'Please enter a message.', 
        'message.min' => 'The message must have at least one character.', 
    ]);
    
    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }
    $to = $request->input('to'); 
    $from = $request->input('from'); 
    $message = $request->input('message');
    $discussion = new Discussion();
    $discussion->from = auth()->id();
    $discussion->to = $to;
    $discussion->date = now();
    $discussion->text = $message;
    $discussion->save();
    return back();
  }
  public function sendMessageIndiv(Request $request)
  {
      $validator = Validator::make($request->all(), [
          'to' => 'required', 
          'message' => 'required|min:1', 
      ], [
          'message.required' => 'Please enter a message.', 
          'message.min' => 'The message must have at least one character.', 
      ]);
      
      if ($validator->fails()) {
          return redirect()->back()->withErrors($validator)->withInput();
      }
      $to = $request->input('to'); 
      $from = $request->input('from'); 
      $message = $request->input('message');
      $discussion = new Discussion();
     if($from == auth()->id()){
        $discussion->from = auth()->id();
        $discussion->to = $to;
     }else{
        $discussion->to = auth()->id();
        $discussion->to = $from;
     }
      $discussion->date = now();
      $discussion->text = $message;
      $discussion->save();
      return back();
    }
 
}
