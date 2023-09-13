@extends('layouts.main')

@section('title', 'Tutors')
@section('content')
  <!-- main page -->
  <div class="jumbotron">
    <h1 class="display-4">Tutors Page</h1>
    <p class="lead">This is Academic Schediling Manager</p>
    <p class="lead">Some more content here</p>
    <hr class="my-4">
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </div>

  @foreach ($tutors as $tutor)
  <div class="col-sm-3 my-3">
    <div class="card h-100">
      <img src="https://cdn0.xtramath.org/images/signin-student.svg" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">{{$tutor["name"]}}</h5>
        <p class="card-text">{{$tutor["description"]}}</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        {{-- <a href="#" class="btn btn-primary">Open</a> --}}
        <a href="/tutors/{{ $tutor["id"] }}/book" class="btn btn-primary">Book Time</a>
      </div>
    </div>
  </div>
@endforeach
@endsection