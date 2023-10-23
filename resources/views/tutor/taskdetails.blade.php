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
            <strong>Submitted file: </strong> there should be a submitted file here
          </div>
      </div>
    </div>
  </div>
  <form class="edit-form">
    <div class="card mb-3">
        <div class="card-body">
          <h5 class="card-title"><strong>Wed. 2pm:</strong> Mary Robbie</h5>
          
        {{-- </div>
        <div class="card-body"> --}}
          <p>Points:  <select class="form-select" id="exampleSelect1">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
          </select></p>
        {{-- </div>
          <div class="card-body"> --}}
            <label for="formFile" class="form-label mt-4">Upload file:</label>
            <input class="form-control" type="file" id="formFile">
          </div>
        </div>
           
      </div>
    <fieldset>
    </div>
      <a href="/tutortasks" class="btn btn-primary">Grade</a>
    </fieldset>
  </form>
@endsection