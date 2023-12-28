@extends('layouts.main')

@section('title', 'Tasks')
@section('content')
<style>
  .card{
    margin: 20px;
  }
</style>
  <div class="bg-light p-5 rounded">
    <h1 class="display-4">Assignments Dashboard</h1>
    <p class="lead">Here you can see the submitted tasks by students. See the details and grade the assignments.</p>
    <hr class="my-4">
</div>

  <div class="card text-white bg-warning mb-3">
    <h4 class="card-header">Submitted tasks</h4>
    @foreach($submitted_tasks as $task)
    <div class="list-group">
      <div class="list-group-item list-group-item-secondary d-flex justify-content-between align-items-center">
       {{ $task->title}}
        <a href="{{ route('task.details', $task->id) }}" class="btn btn-info">Open</a>
      </div>
    </div>
    @endforeach
  </div>
  {{-- <div class="card mb-3"> --}}
    <div class="card text-white bg-success mb-3">
    <h4 class="card-header">Graded tasks</h4>
    @foreach($graded_tasks as $task)
    <div class="list-group">
      <div class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
        {{ $task->title}}
        <a href="{{ route('past.task.details', $task->id) }}" class="btn btn-success">Open</a>
      </div>
    </div>
    @endforeach
  </div>
@endsection