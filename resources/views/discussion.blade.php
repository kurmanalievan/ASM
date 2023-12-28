@extends('layouts.main')

@section('title', 'Discussion')
@section('content')
<style>
  .card {
  margin: 20px; 
  width: 100%; 
  /* padding: 15px; */
}
.sent-message {
  background-color: #c6f1f8; 
}

.received-message {
  background-color: #F0F0F0; 
}
.btn{
  width: 150px;
}

</style>
@foreach($discussions as $discussion)

  <div class="card border-light mb-3
  @if($discussion->userfrom->id === auth()->user()->id)
    sent-message
    @else
    received-message
    @endif
" style="max-width: 20rem;">
  <div class="card-header"><strong>From:</strong> {{$discussion->userfrom->name}} <strong>To:</strong> {{$discussion->userto->name}}</div>
  <div class="card-body">
      <textarea @readonly(true) class="form-control" id="exampleTextarea" rows="3">{{ $discussion['text']}}</textarea>
  </div>
</div>
@endforeach
 <hr/>
 <div class="card text-white bg-light mb-3">
 <form action="{{ route('discussion.send_message_indiv') }}" method="post">
  @csrf
  <div class="card border-light mb-3" style="max-width: 20rem;">
      {{-- <strong>To: {{$discussion->userto->name}} </strong> --}}
      <select style="display: none;" class="form-select"  name="to">
          <option value="{{$discussion->userto->id}}">{{$discussion->userto->name}}</option>
      </select>
      <select style="display: none;" class="form-select"  name="from">
        <option value="{{$discussion->userfrom->id}}">{{$discussion->userfrom->name}}</option>
    </select>
  </div>
  <div class="card-body">
      <textarea class="form-control" name="message" id="exampleTextarea" rows="3">Write a message...</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Send message</button>
</form>
  <a href="/discussions" class="btn btn-success">Go back</a>
</div>
@endsection