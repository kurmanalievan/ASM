@extends('layouts.main')

@section('title', 'Task Details')
@section('content')
<style>
    hr {
      width: 80%; 
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
  <div class="form-group">
    <label for="formFile" class="form-label mt-4">Default file input example</label>
    <input class="form-control" type="file" id="formFile">
  </div>
  <a href="/tasks" class="btn btn-primary">Submit</a>
@endsection