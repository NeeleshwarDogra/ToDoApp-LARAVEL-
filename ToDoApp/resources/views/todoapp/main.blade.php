@extends('layouts.app')

@section('content')
<div class="px-4 py-5 my-5 text-center">
    <h1 class="display-5 fw-bold">ToDoApp</h1>
    <div class="col-lg-6 mx-auto">
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <a class="btn btn-primary btn-lg px-4 gap-3" href="{{ route('login') }}">Login</a>
        <a class="btn btn-primary btn-lg px-4 gap-3"  href="{{ route('register') }}">Register</a>
      </div>
    </div>
  </div>
@endsection