@extends('layouts.main')

@section('title', 'Landing Page')
@section('content')
  <style>
    .rounded-image-container {
    text-align: center;
    margin: 50px; 
}

.rounded-image {
    border-radius: 50%; 
    width: 100px; 
    height: 100px;
    display: block; 
    margin: 0 auto; 
}

.image-text {
    margin-top: 10px; 
}

</style>
<div class="bg-light p-5 rounded">
  <h1 class="display-4">Welcome to the Academic Scheduling Manager!</h1>
  <p class="lead">This is a simple hero unit, a simple Jumbotron-style component for calling extra attention to featured content or information.</p>
</div>
  <div>
   
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="rounded-image-container">
            <img src="https://cdn0.xtramath.org/images/signin-student.svg" class="rounded-image" alt="Rounded Image">
            <div class="image-text">
              <h3 class="image-title">Tutors</h3>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="rounded-image-container">
            <img src="https://img.freepik.com/free-vector/hand-drawn-flat-design-stack-books-illustration_23-2149341898.jpg?w=360" class="rounded-image" alt="Rounded Image">
            <div class="image-text">
              <h3 class="image-title">Resources</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="rounded-image-container">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS8iVM267ZUxysE1lg-nKubjXZB_u7ZEv4kHpaaEQZoNbQiIIQuQUiF7j8AiKIElxiBPKA&usqp=CAU" class="rounded-image" alt="Rounded Image">
            <div class="image-text">
              <h3 class="image-title">Discussions</h3>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="rounded-image-container">
            <img src="https://cdn0.xtramath.org/images/signin-student.svg" class="rounded-image" alt="Rounded Image">
            <div class="image-text">
              <h3 class="image-title">Sessions</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
@section('styles')
    <link rel="stylesheet" href="welcome.css">
@endsection