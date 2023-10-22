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
  <a href="/discussion" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">{{ $discussion['created_at']}}, {{$discussion->userfrom->name}}</h5>
    </div>
    {{-- <p class="mb-1">{{ $discussion['text']}}</p> --}}
  </a>
@endforeach
</div>
@endsection