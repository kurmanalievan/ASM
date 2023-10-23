@extends('layouts.main')

@section('title', 'Tasks')
@section('content')
  <!-- main page -->
  <div class="bg-light p-5 rounded">
    <h1 class="display-4">Tutor's view of the assignments section</h1>
    <p class="lead">This is a simple hero unit, a simple Jumbotron-style component for calling extra attention to featured content or information.</p>
    <hr class="my-4">
</div>

  <div class="card mb-3">
    <h4 class="card-header">Submitted tasks</h4>
    @foreach($tasks as $task)
    <div class="list-group">
      <div class="list-group-item list-group-item-secondary d-flex justify-content-between align-items-center">
        Cras justo odio
        <a href="{{ route('task.details', $task->id) }}" class="btn btn-info">Open</a>
      </div>
    </div>
    @endforeach
    {{-- <div class="list-group">
      <div class="list-group-item list-group-item-secondary d-flex justify-content-between align-items-center">
        Cras justo odio
        <a href="/submitted" class="btn btn-info">Open</a>
      </div>
    </div>
    <div class="list-group">
      <div class="list-group-item list-group-item-secondary d-flex justify-content-between align-items-center">
        Cras justo odio
        <a href="/submitted" class="btn btn-info">Open</a>
      </div>
    </div>
  </div> --}}

  <div class="card mb-3">
    <h4 class="card-header">Graded tasks</h4>
    <div class="list-group">
      <div class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
        Cras justo odio
        <a href="/taskdetails" class="btn btn-success">Open</a>
      </div>
    </div>
  </div>
  <a href="/assign" class="btn btn-primary">Assign new task</a>
@endsection