@extends('layouts.main')

@section('title', 'Discussions')
@section('content')
  <!-- main page -->
  <div class="jumbotron">
    <h1 class="display-4">Discussions Page</h1>
    <p class="lead">This is Academic Schediling Manager</p>
    <p class="lead">Some more content here</p>
    <hr class="my-4">
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </div>
  <h2>{{$projects}}</h2>
@endsection