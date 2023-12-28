@extends('layouts.main')

@section('title', 'Details View')
<style>
    .card{
      margin: 20px;
    }
    .btn{
      margin-left: 20px;
    }
</style>
@section('content')
  <div class="bg-light p-5 rounded">
    <h1 class="display-4">Session details</h1>
    <p class="lead">Find details of the upcoming session with the student.</p>
    <hr class="my-4">
</div>

<div class="card text-white bg-secondary mb-3">
  @if (isset($session->student))
  {{-- <div class="card mb-3"> --}}
    <h3 class="card-header">Session with: <strong> {{ $session->student->name}} </strong> </h3>
    <div class="card-body">
      <h4 class="card-title"><strong>Time: </strong> {{$session->from}} - {{ $session->to}}</h4>
      <h4 class="card-title"><strong>Date: </strong> {{$session->date}}</h4>
      <h6 class="card-subtitle text-muted"> You can cancel the session anytime below</h6>
    </div>
  </div>
  
</div>
  <form action="{{ route('session.cancel', $session->id) }}" method="post">
    @csrf
  <button type="submit" class="btn btn-primary">Cancel</button>
</form>
 <a href="{{ route('assign', $session->id) }}"class="btn btn-primary">Assign task</a>
  @else
      <div>
          <h1 class="display-4">Nothing to show</h1>
      </div>
    @endif
@endsection