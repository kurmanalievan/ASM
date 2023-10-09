@extends('layouts.main')

@section('title', 'Tutors View')
@section('content')
  <!-- main page -->
  <div class="bg-light p-5 rounded">
    <h1 class="display-4">List of tutors (Teacher's view)</h1>
    <p class="lead">This is a simple hero unit, a simple Jumbotron-style component for calling extra attention to featured content or information.</p>
    <hr class="my-4">
</div>


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
      </div>
    </div>
  </div>
</div>
</div>
</div>

@endsection