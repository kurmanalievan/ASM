@extends('layouts.main')

@section('title', 'Details View')
<style>
    .rounded-image{
    border-radius: 50%; 
    width: 200px; 
    height: 200px;
    display: block; 
    /* margin: 0 auto;  */
    }

    .edit-form{
        margin: 20px;
        padding: 5%;
    }
</style>
@section('content')
  <!-- main page -->
  <div class="bg-light p-5 rounded">
    <h1 class="display-4">Details of the upcoming session with Tutor</h1>
    <p class="lead">This is a simple hero unit, a simple Jumbotron-style component for calling extra attention to featured content or information.</p>
    <hr class="my-4">
</div>
  {{-- <form class="edit-form"> --}}
    <div class="card mb-3">
        <h3 class="card-header">Session with: <strong> {{ $session->tutor->name}} </strong> </h3>
        <div class="card-body">
          <h4 class="card-title"><strong>Time: </strong> {{$session->from}} - {{ $session->to}}</h4>
          <h4 class="card-title"><strong>Date: </strong> {{$session->date}}</h4>
          <h6 class="card-subtitle text-muted"> You can cancel the session anytime below</h6>
        </div>
      </div>
    <fieldset>
    </div>
      {{-- <button type="submit" class="btn btn-primary">Edit</button> --}}
      <form action="{{ route('session.cancel', $session->id) }}" method="post">
        @csrf
      <button type="submit" class="btn btn-primary">Cancel</button>
    </form>
    </fieldset>
  {{-- </form> --}}
@endsection