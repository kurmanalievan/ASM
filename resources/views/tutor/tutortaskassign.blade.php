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
   <div class="card-body">
    <label for="inputDefault">Title: </label>
        <input type="text" class="form-control" placeholder="Default input" id="inputDefault">
   </div>
   <div class="card-body">
    <label for="inputDefault">Due date: </label>
        <input type="text" class="form-control" placeholder="Default input" id="inputDefault">
   </div>
   <div class="card-body">
    <label for="inputDefault">Points:</label>
        <input type="text" class="form-control" placeholder="Default input" id="inputDefault">
   </div>
   <div class="card-body">
    <label for="inputDefault">Instructions: </label>
    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
   </div>
   <a href="/" class="btn btn-primary">Assign</a>
  </div>
@endsection