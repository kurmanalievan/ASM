@extends('layouts.main')

@section('title', 'My Profile')
@section('content')
<style>
  .card{
    margin: 20px;
  }
</style>
  <div class="bg-light p-5 rounded">
    <h1 class="display-4">Tutor's profile</h1>
    <p class="lead">Here the tutor can publish new availabilities.</p>
    <hr class="my-4">
</div>
<div class="card text-light bg-info mb-3">
<h1>Published availability:</h1>
<ul class="list-group">
  @foreach($sessions as $session)
    <li class="list-group-item d-flex justify-content-between align-items-center">
      <h5> <strong>Date: </strong>{{$session->date}}</h5>
      <h4><strong>Time: </strong>{{$session->from}} - {{$session->to}}</h4>
      <form action="{{ route('session.delete', $session->id) }}" method="post">
        @csrf
        @method('DELETE')
      <button type="submit" class="btn btn-primary">Delete</button>
    </form>
    </li>
  @endforeach
  </ul>
  <form action="{{ route('profile.add') }}" method="post">
    @csrf
    <div class="card bg-light mb-3">
        <div class="card-body">
          <h4 class="card-title">Enter Availability: </h4>
          <label for="date">Select a Date:</label>
          <input type="date" id="date" name="date">
          <label for="from">From:</label>
          <input type="time" id="from" name="from">
          <label for="to">To:</label>
          <input type="time" id="to" name="to">
          <button type="submit" class="btn btn-primary">Add</button>
        </div>
    </div>
</form>

</div>

@endsection