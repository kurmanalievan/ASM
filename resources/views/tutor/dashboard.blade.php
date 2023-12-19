@extends('layouts.main')

@section('title', 'Dashboard')
@section('content')
{{-- @include('tutor.dashboard') --}}
  <!-- main page -->
  <style>
    .card {
    margin: 20px; 
    /* max-width: 400px;  */
    width: 100%; 
    padding: 15px;
  }
</style>
<div class="bg-light p-5 rounded">
  <h1 class="display-4">Teacher's Dashboard</h1>
  <p class="lead">This is a simple hero unit, a simple Jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
</div>
{{-- <h1>Upcoming Sessions</h1> --}}
{{-- @foreach($sessions as $session) --}}
@forelse($sessions as $session)
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">{{ $session['date']}}</h4>
      <h6 class="card-subtitle mb-2 text-muted">Math</h6>
      {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
      <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Time:</label>
        <div class="col-sm-10">
          <input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="2pm - 3pm">
        </div>
        <label for="staticEmail" class="col-sm-2 col-form-label">Tutor:</label>
        <div class="col-sm-10">
          <input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="{{$session->student->name}}">
        </div>
      </div>
      <a href="{{ route('session.details', $session->id) }}" class="btn btn-primary">Open</a>
      {{-- <a href="#" class="card-link">Another link</a> --}}
    </div>
</div>
{{-- @endforeach --}}
    <hr/>
@empty
    <div>
        <h1 class="display-4">Nothing to show</h1>
    </div>
    @endforelse
  {{-- @endif --}}
   {{-- <h1>Last Session</h1> --}}

@endsection