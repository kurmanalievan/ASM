@extends('layouts.main')

@section('title', 'Discussion')
@section('content')
@foreach($discussions as $discussion)
  <div class="card border-light mb-3" style="max-width: 20rem;">
  <div class="card-header"><strong>From:</strong> {{$discussion->userfrom->name}} <strong>To:</strong> {{$discussion->userto->name}}</div>
  <div class="card-body">
      <textarea @readonly(true) class="form-control" id="exampleTextarea" rows="3">{{ $discussion['text']}}</textarea>
  </div>
</div>
@endforeach
 <hr/>
 <form action="{{ route('discussion.send_message') }}" method="post">
  @csrf
  <div class="card border-light mb-3" style="max-width: 20rem;">
      <strong>To:</strong>
      {{-- <select class="form-select" name="to">
          <option value="{{$discussion->userto->id}}">{{$discussion->userto->name}}</option>
          <!-- Add options for other users if applicable -->
      </select> --}}
      <select class="form-select" name="to">
        @foreach($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
    </select>
  </div>
  <div class="card-body">
      <textarea class="form-control" name="message" id="exampleTextarea" rows="3">This is gonna be the message</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Send message</button>
</form>
 {{-- <h6>Write a new message:</h6>
 <div class="card border-light mb-3" style="max-width: 20rem;">
   <strong>To:</strong> 
   <select class="form-select" id="exampleSelect1">
        <option>{{$discussion->userfrom->name}}
        </option>
      </select>
   </div>
  <div class="card-body">
      <textarea class="form-control" id="exampleTextarea" rows="3">This is gonna be the message</textarea>
  </div>
  
</div>
<button type="button" class="btn btn-primary">Send</button> --}}
@endsection