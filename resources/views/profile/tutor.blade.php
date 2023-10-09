@extends('layouts.main')

@section('title', 'My Profile')
@section('content')
  <div class="bg-light p-5 rounded">
    <h1 class="display-4">Tutor's profile</h1>
    <p class="lead">This is a simple hero unit, a simple Jumbotron-style component for calling extra attention to featured content or information.</p>
    <hr class="my-4">
</div>
<h1>Published availability:</h1>
<ul class="list-group">
    <li class="list-group-item d-flex justify-content-between align-items-center">
      Cras justo odio
      {{-- <span class="badge bg-primary rounded-pill">14</span> --}}
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
      Dapibus ac facilisis in
      {{-- <span class="badge bg-primary rounded-pill">2</span> --}}
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
      Morbi leo risus
      {{-- <span class="badge bg-primary rounded-pill">1</span> --}}
    </li>
  </ul>
<div class="card bg-light mb-3">
    <div class="card-body">
      <h4 class="card-title">Enter Availability: </h4>
      <h6 class="card-subtitle mb-2 text-muted">Math</h6>
      <label for="datetimepicker">Select a Date and Time:</label>
<input type="datetime-local" id="datetimepicker" name="datetimepicker">
      <a href="" class="btn btn-primary">Add</a>
      {{-- <a href="#" class="card-link">Another link</a> --}}
    </div>
</div>



@endsection