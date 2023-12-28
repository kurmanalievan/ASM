@extends('layouts.main')

@section('title', 'Tutors')
@section('content')
<style>
  .card {
  margin: 20px; 
  width: 100%; 
  padding: 15px;
}
</style>
  <div class="bg-light p-5 rounded">
    <h1 class="display-4">List of tutors</h1>
    <p class="lead">Here you can find the list of all tutors. You can check the details of the particular tutor.</p>
    <hr class="my-4">
</div>

@foreach($tutors as $tutor)
<div class="card border-success mb-3">
  <div class="card-body">
<div class="container">
  <div class="row">
    <div class="col-md-4"> 
      <img src="https://cdn0.xtramath.org/images/signin-student.svg" class="card-img-top">
    </div>
    <div class="col-md-8"> 
      <div class="card-body">
        <h4 class="card-title">{{ $tutor['name']}}</h4>
        <h6 class="card-subtitle mb-2 text-muted">Tutor</h6>
        <p><em>See published availabilities of the tutor below</em></p>
        <a href="{{ route('tutor.details', $tutor->id) }}" class="btn btn-primary">Details</a>
      </div>
    </div>
  </div>
</div>
</div>
</div>
@endforeach
{{-- <div class="card">
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
        {{-- <a href="#" class="card-link">Another link</a> --
      </div>
    </div>
  </div>
</div>
</div>
</div> --}}
{{-- 
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
        {{-- <a href="#" class="card-link">Another link</a> --
      </div>
    </div>
  </div>
</div>
</div>
</div> --}}

@endsection