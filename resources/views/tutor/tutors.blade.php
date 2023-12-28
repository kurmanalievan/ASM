@extends('layouts.main')

@section('title', 'Tutors View')
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
    <p class="lead">Here you can find the list of all tutors. </p>
    <hr class="my-4">
</div>

@foreach($tutors as $tutor)
<div class="card border-info mb-3">
  <div class="card-body">
<div class="container">
  <div class="row">
    <div class="col-md-4"> 
      <img src="https://cdn0.xtramath.org/images/signin-student.svg" class="card-img-top">
    </div>
    <div class="col-md-8"> 
      <div class="card-body">
        <h4 class="card-title">{{ $tutor['name']}}</h4>
        <h6 class="card-subtitle mb-2 text-muted">Programming/Computer Science</h6>
      </div>
    </div>
  </div>
</div>
</div>
</div>
@endforeach
<div class="card">
  <div class="card-body">
<div class="container">
  <div class="row">
    <div class="col-md-4"> 
      <img src="https://cdn0.xtramath.org/images/signin-student.svg" class="card-img-top">
    </div>
    <div class="col-md-8"> 
      <div class="card-body">
        <h4 class="card-title">Mary Robbie</h4>
        <h6 class="card-subtitle mb-2 text-muted">Math</h6>
        <p><em>"I've always loved math"</em></p>
      </div>
    </div>
  </div>
</div>
</div>
</div>

@endsection