@extends('layouts.main')

@section('title', 'Discussions')
@section('content')
  <!-- main page -->
  <div class="bg-light p-5 rounded">
    <h1 class="display-4">Discussions page</h1>
    <p class="lead">This is a simple hero unit, a simple Jumbotron-style component for calling extra attention to featured content or information.</p>
    <hr class="my-4">
</div>
  {{-- <h2>{{$projects}}</h2> --}}
  <div class="list-group">
@foreach($discussions as $discussion)
  <a href="{{ route('discussion', ['id' => $discussion->userfrom, 'id2' => $discussion->userto]) }}" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">{{ $discussion['created_at']}}, <strong>From:</strong> {{$discussion->userfrom->name}} <strong>To:</strong> {{$discussion->userto->name}}</h5>
    </div>
    {{-- <p class="mb-1">{{ $discussion['text']}}</p> --}}
  </a>
@endforeach
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
</div>
@endsection