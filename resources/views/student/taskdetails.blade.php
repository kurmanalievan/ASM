@extends('layouts.main')

@section('title', 'Task Details')
@section('content')
<style>
    hr {
      width: 100%; 
    }
    h1 {
        margin-top: 5%;
        margin-left: 10%;
    }
    h4, h2, p, .form-label, .btn {
        margin-left: 10%;
    }
    .form-control{
        margin-left: 10%;
        width: 80%;
    }
  </style>
  <div class="card border-primary mb-3" >
  <h1 class="text-left">{{ $task['title']}}</h1>
  <hr />
  <h4 class="text-left"><strong>Due:</strong> {{ $task['date']}}</h4>
  <h4 class="text-left"><strong>Points:</strong> {{ $task['points']}}</h4>
  <hr />
  <div>
    <h2>Instructions</h2>
    <p>
        {{ $task['instructions']}}
    </p>
  </div>
  <hr/>
  <form action="{{ route('upload.file', ['task_id' => $task->id]) }}" method="post" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="formFile" class="form-label mt-4">Default file input example</label>
    <input class="form-control" type="file" id="formFile" name="file">
  </div>
  {{-- <a href="/tasks" class="btn btn-primary">Submit</a> --}}
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection