@extends('layouts.main')

@section('title', 'Dashboard')
@section('content')
  <style>
    .card {
    margin: 20px; 
    width: 100%; 
    padding: 15px;
  }
</style>
<div class="bg-light p-5 rounded">
  <h1 class="display-4">Tutor's Dashboard</h1>
  <p class="lead">This is a tutor's Dashboard. Upcoming booked sessions with students appear here.</p>
  <hr class="my-4">
</div>
{{-- <h1>Upcoming Sessions</h1> --}}
{{-- @foreach($sessions as $session) --}}
@forelse($sessions as $session)
<div class="card text-white bg-success mb-3" >
    <div class="card-body">
      <h4 class="card-title">{{ $session['date']}}</h4>
      <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Time:</label>
        <div class="col-sm-10">
          <input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="{{$session->from}} - {{$session->to}}">
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

@endsection