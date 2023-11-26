@extends('layouts.main')

@section('title', 'Tasks')
@section('content')
  <!-- main page -->
  <div class="bg-light p-5 rounded">
    <h1 class="display-4">Students view of the tasks</h1>
    <p class="lead">This is a simple hero unit, a simple Jumbotron-style component for calling extra attention to featured content or information.</p>
    <hr class="my-4">
    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
</div>

  <div class="card mb-3">
    <h4 class="card-header">Upcoming tasks</h4>
@foreach($upcoming_tasks as $task)
    <div class="list-group">
      <div class="list-group-item list-group-item-secondary d-flex justify-content-between align-items-center">
        {{$task['title']}}
        <a href="{{ route('task.details', $task->id) }}" class="btn btn-info">Open</a>
      </div>
    </div>
@endforeach
  </div>

  <div class="card mb-3">
    <h4 class="card-header">Past tasks</h4>
    @foreach($past_tasks as $task)
    <div class="list-group">
      <div class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
        {{$task['title']}}
        <a href="{{ route('past.task.details', $task->id) }}" class="btn btn-success">Open</a>
      </div>
    </div>
    @endforeach
  </div>
@endsection