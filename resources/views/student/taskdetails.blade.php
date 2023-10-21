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
  <h1 class="text-left">Create a game in Java</h1>
  <hr />
  <h4 class="text-left"><strong>Due:</strong> Dec 15 11:59pm</h4>
  <h4 class="text-left"><strong>Points:</strong> 5</h4>
  <hr />
  <div>
    <h2>Instructions</h2>
    <p>
        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose injected humour and the like.
    </p>
  </div>
  <hr/>
  <div class="form-group">
    <label for="formFile" class="form-label mt-4">Default file input example</label>
    <input class="form-control" type="file" id="formFile">
  </div>
  <a href="/tasks" class="btn btn-primary">Submit</a>
@endsection