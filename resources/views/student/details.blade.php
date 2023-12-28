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

    .container {
     /* display: flex; */
     justify-content: left;
     margin:20px;
    }
</style>
@section('content')
  <div class="bg-light p-5 rounded">
    <h1 class="display-4">Session details</h1>
    <p class="lead">Find details of the upcoming session with the tutor.</p>
    <hr class="my-4">
</div>
  {{-- <form class="edit-form"> --}}
    <div class="container">
    <div class="card text-white bg-secondary mb-3">
        <h3 class="card-header">Session with: <strong> {{ $session->tutor->name}} </strong> </h3>
        <div class="card-body">
          <h4 class="card-title"><strong>Time: </strong> {{$session->from}} - {{ $session->to}}</h4>
          <h4 class="card-title"><strong>Date: </strong> {{$session->date}}</h4>
          <h6 class="card-subtitle text-muted"> You can cancel the session anytime below</h6>
        </div>
      </div>
      <form action="{{ route('session.cancel', $session->id) }}" method="post">
        @csrf
      <button type="submit" class="btn btn-primary custom-btn">Cancel</button>
    </form>
    </div>
    {{-- <fieldset> --}}
      {{-- <form action="{{ route('session.cancel', $session->id) }}" method="post">
        @csrf
      <button type="submit" class="btn btn-primary custom-btn">Cancel</button>
    </form> --}}
    {{-- </fieldset> --}}
  {{-- </form> --}}
@endsection