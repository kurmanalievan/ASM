@extends('layouts.main')

@section('title', 'My Profile')
@section('content')
  <!-- main page -->
  <div class="bg-light p-5 rounded">
    <h1 class="display-4">See the details of {{$tutor['name']}}</h1>
    {{-- <p class="lead">This is a simple hero unit, a simple Jumbotron-style component for calling extra attention to featured content or information.</p> --}}
    <hr class="my-4">
</div>

  <div class="card mb-3">
    <h3 class="card-header">{{$tutor['name']}}</h3>
    {{-- <div class="card-body"> --}}
    
        <div class="card-body">
            <h5 class="card-title">Programming tutor</h5>
            <h6 class="card-subtitle text-muted">Computer Science</h6>
          </div>
        
  <div class="container">
    <div class="row">
      <div class="col-md-4"> <!-- Adjust the column width as needed -->
        <img src="https://cdn0.xtramath.org/images/signin-student.svg" class="card-img-top">
      </div>
      <div class="col-md-4"> <!-- Adjust the column width as needed -->
        {{-- <form action="{{ route('book') }}" method="post">
          @csrf --}}
        <div class="card-body">
          <h5 class="card-title text-muted" >Availability</h4>
            @foreach($sessions as $session)
            <li class="list-group-item list-group-item-success d-flex justify-content-between align-items-center">
              <p> <strong>Date: </strong>{{$session->date}}</p>
              <p> <strong>Time: </strong>{{$session->from}} - {{ $session->to}}</p>
              <input type="hidden" name="booked_sessions[]" value="{{ $session->id }}">
              <form action="{{ route('book', $session->id) }}" method="post">
                @csrf
              <button type="submit" class="btn btn-primary">Book</button>
            </form>
            </li>
           @endforeach
          {{-- <a href="/tutors" class="btn btn-primary">Book</a> --}}
          {{-- <a href="#" class="card-link">Another link</a> --}}
        </div>
      {{-- </form> --}}
      </div>
    </div>
  </div>
  </div>
  </div>
@endsection