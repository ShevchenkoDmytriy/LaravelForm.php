@extends('layouts.app')

@section('title-block')

@endsection


@section('content')
<form action="{{route('Contact-form')}}">
    @csrf
            <div class="form-group" >
              <label for="name">Enter name</label>
              <input type="text" name ="name" placeholder="Enter name" id="name" class="form-controller">
  </div>
              <div class="form-group" >
              <label for="email">Enter email</label>
              <input type="text" name ="email" placeholder="Enter email" id="email" class="form-control">
            </div>

            <div class="form-group" >
              <label for="subject">Enter name</label>
              <input type="text" name ="subject" placeholder="Name of message" id="subject" class="form-control">
            </div>

            <div class="form-group" >
              <label for="message">Enter name</label>
      <textarea name="message" id="message" class="form-control" ></textarea>
            </div>
          <button type="submit" class="btn btn-success">Send</button>
          </form>
@endsection 