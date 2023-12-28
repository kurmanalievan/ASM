@extends('layouts.main')

@section('title', 'Tasks')
@section('content')
  <style>
    .card{
      margin: 15px;
    }
  </style>
  <div class="bg-light p-5 rounded">
    <h1 class="display-4">Assigned tasks</h1>
    <p class="lead">Find the assigned tasks here..</p>
    <hr class="my-4">
</div>

  <div class="card text-white bg-warning mb-3">
    <h4 class="card-header">Upcoming tasks</h4>
@foreach($upcoming_tasks as $task)
    <div class="list-group">
      <div class="list-group-item list-group-item-secondary d-flex justify-content-between align-items-center">
        {{$task['title']}}
        <a href="{{ route('task.details', $task->id) }}" class="btn btn-primary">Open</a>
      </div>
    </div>
@endforeach
  </div>

  <div class="card text-white bg-success mb-3">
  {{-- <div class="card mb-3"> --}}
    <h4 class="card-header">Past tasks</h4>
    @foreach($past_tasks as $task)
    <div class="list-group">
      <div class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
        {{$task['title']}}
        <a href="{{ route('past.task.details', $task->id) }}" class="btn btn-secondary">Open</a>
      </div>
    </div>
    @endforeach
  {{-- </div> --}}
</div>
@endsection