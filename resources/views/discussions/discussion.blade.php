@extends('layouts.main')

@section('title', 'Discussion')
@section('content')
  <div class="card border-light mb-3" style="max-width: 20rem;">
  <div class="card-header"><strong>From:</strong> Tom <strong>To:</strong> Tim</div>
  <div class="card-body">
    {{-- <h4 class="card-title">Light card title</h4>
       <div class="form-group"> --}}
      {{-- <label for="exampleTextarea" class="form-label mt-4">Example textarea</label> --}}
      <textarea @readonly(true) class="form-control" id="exampleTextarea" rows="3">This is gonna be the message</textarea>
    {{-- </div> --}}
  </div>
</div>
 <hr/>
 <h6>Write a new message:</h6>
 <div class="card border-light mb-3" style="max-width: 20rem;">
  <div class="card-header"><strong>From:</strong>
  <select class="form-select" id="exampleSelect1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
   <strong>To:</strong> 
   <select class="form-select" id="exampleSelect1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
   </div>
  <div class="card-body">
    {{-- <h4 class="card-title">Light card title</h4>
       <div class="form-group"> --}}
      {{-- <label for="exampleTextarea" class="form-label mt-4">Example textarea</label> --}}
      <textarea class="form-control" id="exampleTextarea" rows="3">This is gonna be the message</textarea>
    {{-- </div> --}}

  </div>
  
</div>
<button type="button" class="btn btn-primary">Send</button>
@endsection