@extends('layouts.main')

@section('title', 'Task Assignment')
@section('content')
<style>
  .card{
    margin: 20px;
  }
</style>
  <div class="bg-light p-5 rounded">
    <h1 class="display-4">Assign new task</h1>
    <p class="lead">Assign a task to the student.</p>
    <hr class="my-4">
</div>
<div class="card text-white bg-secondary mb-3" style="max-width: 20rem;">
    <div class="card-header">Create task</div>
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
  
</form>
</div>
@endsection