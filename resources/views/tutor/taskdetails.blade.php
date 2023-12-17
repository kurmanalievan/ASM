@extends('layouts.main')

@section('title', 'Task Details')
@section('content')
<div><h1>Grade assignment</h1></div>
<div class="accordion" id="accordionExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <strong>Task Details</strong>
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
        <div class="accordion-body">
          <strong>Due: </strong> {{$task['date']}}
        </div>
        <div class="accordion-body">
            <strong>Instructions: </strong> {{ $task['instructions']}}
          </div>
          <div class="accordion-body">
            <strong>Points: </strong> {{ $task['points']}}
          </div>
          <div class="accordion-body">
            <strong>Submitted file:  <div><a href="{{ route('download.file', ['task_id' => $task->id]) }}">Download</a></div>
          </div>
      </div>
    </div>
  </div>
  {{-- <form class="edit-form"> --}}

    <fieldset>

    <form action="{{ route('task.delete', $task->id) }}" method="post">
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-primary">Delete</button>
    </form>
  </fieldset>
  {{-- </form> --}}
@endsection