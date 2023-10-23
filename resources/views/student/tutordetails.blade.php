@extends('layouts.main')

@section('title', 'My Profile')
@section('content')
  <!-- main page -->
  <div class="bg-light p-5 rounded">
    <h1 class="display-4">See the details of {tutor}</h1>
    <p class="lead">This is a simple hero unit, a simple Jumbotron-style component for calling extra attention to featured content or information.</p>
    <hr class="my-4">
</div>

  <div class="card mb-3">
    <h3 class="card-header">{{$tutor['name']}}</h3>
    {{-- <div class="card-body"> --}}
    
        <div class="card-body">
            <h5 class="card-title">Programming tutor</h5>
            <h6 class="card-subtitle text-muted">Computer Science</h6>
          </div>
        
  <div class="container">
    <div class="row">
      <div class="col-md-4"> <!-- Adjust the column width as needed -->
        <img src="https://cdn0.xtramath.org/images/signin-student.svg" class="card-img-top">
      </div>
      <div class="col-md-4"> <!-- Adjust the column width as needed -->
        <div class="card-body">
          <h5 class="card-title text-muted" >Availability</h4>
          {{-- <h6 class="card-subtitle mb-2 text-muted">Math</h6> --}}
          {{-- <p>Month:  <select class="form-select" id="exampleSelect1">
            <option>September</option>
            <option>October</option>
            <option>November</option>
            <option>December</option>
          </select></p>
          <p>Weekday:  <select class="form-select" id="exampleSelect1">
            <option>Monday</option>
            <option>Tuesday</option>
            <option>Wednesday</option>
            <option>Thursday</option>
            <option>Friday</option>
          </select></p>
          <p>Time:  <select class="form-select" id="exampleSelect1">
            <option>2pm - 3pm</option>
            <option>3pm - 4pm</option>
            <option>4pm - 5pm</option>
          </select></p> --}}
          <li class="list-group-item list-group-item-success d-flex justify-content-between align-items-center">
            October 2, 3pm
            <a href="/tutors" class="btn btn-secondary">Book</a>
          </li>
          <li class="list-group-item list-group-item-success d-flex justify-content-between align-items-center">
            September 20, 1pm
            <a href="/tutors" class="btn btn-secondary">Book</a>
          </li>
          <li class="list-group-item list-group-item-success d-flex justify-content-between align-items-center">
            October 2, 3pm
            <a href="/tutors" class="btn btn-secondary">Book</a>
          </li>
          <li class="list-group-item list-group-item-success d-flex justify-content-between align-items-center">
            September 20, 1pm
            <a href="/tutors" class="btn btn-secondary">Book</a>
          </li>
          {{-- <a href="/tutors" class="btn btn-primary">Book</a> --}}
          {{-- <a href="#" class="card-link">Another link</a> --}}
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
@endsection