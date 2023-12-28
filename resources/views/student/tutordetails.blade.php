@extends('layouts.main')

@section('title', 'My Profile')
@section('content')
<style>
  .card{
    margin: 20px;
  }
</style>
  <div class="bg-light p-5 rounded">
    <h1 class="display-4">See the details of {{$tutor['name']}}</h1>
    <hr class="my-4">
</div>

  <div class="card text-white bg-info mb-3">
    <h3 class="card-header">{{$tutor['name']}}</h3>
        <div class="card-body">
            <h6 class="card-subtitle text-muted">Computer/Programming tutor</h6>
          </div>
        
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <img src="https://cdn0.xtramath.org/images/signin-student.svg" class="card-img-top">
      </div>
      <div class="col-md-4"> 
        {{-- <form action="{{ route('book') }}" method="post">
          @csrf --}}
        <div class="card border-info mb-3">
          <h5 class="card-title text-muted" >Availability</h4>
           
            @forelse($sessions as $session)
            <li class="list-group-item list-group-item-success d-flex justify-content-between align-items-center">
              <p> <strong>Date: </strong>{{$session->date}}</p>
              <p> <strong>Time: </strong>{{$session->from}} - {{ $session->to}}</p>
              <input type="hidden" name="booked_sessions[]" value="{{ $session->id }}">
              <form action="{{ route('book', $session->id) }}" method="post">
                @csrf
              <button type="submit" class="btn btn-primary">Book</button>
            </form>
            </li>
            @empty
              <div>
                  <h5>Nothing to show</h5>
              </div>
              @endforelse
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