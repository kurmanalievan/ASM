@extends('layouts.main')

@section('title', 'Discussions')
@section('content')
<style>
 ul.list-group {
  text-decoration: none; 
  margin: 20px;
}
 .card{
  margin: 20px;
 }
</style>
  <div class="bg-light p-5 rounded">
    <h1 class="display-4">Discussions page</h1>
    <p class="lead">Exchange messages with users of the system here.</p>
    <hr class="my-4">
</div>
  {{-- <h2>{{$projects}}</h2> --}}
  {{-- <div class="list-group"> --}}
    <ul class="list-group">
@foreach($discussions as $discussion)
<li class="list-group-item list-group-item-info d-flex justify-content-between align-items-center">
  <a href="{{ route('discussion', ['id' => $discussion->userfrom, 'id2' => $discussion->userto]) }}" class="discussion-link list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">{{ $discussion['created_at']}}, <strong>From:</strong> {{$discussion->userfrom->name}} <strong>To:</strong> {{$discussion->userto->name}}</h5>
    </div>
    {{-- <p class="mb-1">{{ $discussion['text']}}</p> --}}
  </a>
</li>
@endforeach
</ul>
<div class="card text-white bg-light mb-3">
<form action="{{ route('discussion.send_message') }}" method="post">
  @csrf
  <div class="card text-white bg-info mb-3" style="max-width: 20rem;">
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
  <div class="card text-white bg-info mb-3">
      <textarea class="form-control" name="message" id="exampleTextarea" rows="3">Write a message...</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Send message</button>
</form>
</div>
@endsection