@extends('layouts.main')

@section('title', 'Tutors')
@section('content')
  <!-- main page -->
  <div class="bg-light p-5 rounded">
    <h1 class="display-4">Here you can the list of tutors</h1>
    <p class="lead">This is a simple hero unit, a simple Jumbotron-style component for calling extra attention to featured content or information.</p>
    <hr class="my-4">
    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
</div>

  {{-- @foreach ($tutors as $tutor)
  <div class="col-sm-3 my-3">
    <div class="card h-100">
      <img src="public/user.png" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">{{$tutor["name"]}}</h5>
        <p class="card-text">{{$tutor["description"]}}</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      
        <a href="/tutors/{{ $tutor["id"] }}/book" class="btn btn-primary">Book Time</a>
      </div>
    </div>
  </div>
@endforeach --}}
{{-- 
<div class="card">
  <div class="card-body">
    <img src="https://cdn0.xtramath.org/images/signin-student.svg" class="card-img-top">
    <h4 class="card-title">John Smith</h4>
    <h6 class="card-subtitle mb-2 text-muted">Programming</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="card-link">Details</a>
  </div>
</div> --}}

<div class="card">
  <div class="card-body">
<div class="container">
  <div class="row">
    <div class="col-md-4"> 
      <img src="https://cdn0.xtramath.org/images/signin-student.svg" class="card-img-top">
    </div>
    <div class="col-md-8"> 
      <div class="card-body">
        <h4 class="card-title">John Smith</h4>
        <h6 class="card-subtitle mb-2 text-muted">Programming</h6>
        <p><em>"I've always loved programming"</em></p>
        <a href="tutordetails" class="card-link">Details</a>
        {{-- <a href="#" class="card-link">Another link</a> --}}
      </div>
    </div>
  </div>
</div>
</div>
</div>

<div class="card">
  <div class="card-body">
<div class="container">
  <div class="row">
    <div class="col-md-4"> <!-- Adjust the column width as needed -->
      <img src="https://cdn0.xtramath.org/images/signin-student.svg" class="card-img-top">
    </div>
    <div class="col-md-8"> <!-- Adjust the column width as needed -->
      <div class="card-body">
        <h4 class="card-title">Mary Robbie</h4>
        <h6 class="card-subtitle mb-2 text-muted">Math</h6>
        <p><em>"I've always loved math"</em></p>
        <a href="/tutordetails" class="card-link">Details</a>
        {{-- <a href="#" class="card-link">Another link</a> --}}
      </div>
    </div>
  </div>
</div>
</div>
</div>

@endsection