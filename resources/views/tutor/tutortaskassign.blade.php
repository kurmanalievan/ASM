@extends('layouts.main')

@section('title', 'Task Assignment')
@section('content')
  <div class="bg-light p-5 rounded">
    <h1 class="display-4">Assign new task</h1>
    <p class="lead">This is a simple hero unit, a simple Jumbotron-style component for calling extra attention to featured content or information.</p>
    <hr class="my-4">
</div>
<div class="card border-light mb-3" style="max-width: 20rem;">
    <div class="card-header">Create task</div>
    {{-- <div class="card-body">
        <label for="inputDefault">Assignee: </label>
            <input type="text" class="form-control" placeholder="Default input" id="inputDefault">
       </div> --}}
 <form action="{{ route('assign.add', ['id' => $session->id]) }}" method="post">
    @csrf
   <div class="card-body">
    <label for="inputDefault">Title: </label>
        <input type="text" name="title" class="form-control" placeholder="Default input" id="inputDefault">
   </div>
   <div class="card-body">
    <label for="inputDefault">Due date: </label>
        {{-- <input type="text" name="date" class="form-control" placeholder="Default input" id="inputDefault"> --}}
        <input type="date" id="date" name="date">
   </div>
   <div class="card-body">
    <label for="inputDefault">Points:</label>
        <input type="text" name="points" class="form-control" placeholder="Default input" id="inputDefault">
   </div>
   <div class="card-body">
    <label for="inputDefault">Instructions: </label>
    <textarea class="form-control" name="instructions" id="exampleTextarea" rows="3"></textarea> 
   </div>
   <button type="submit" class="btn btn-primary">Assign</button>
  </div>
</form>

  {{-- <form action="{{ route('profile.add') }}" method="post">
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
</form> --}}
@endsection