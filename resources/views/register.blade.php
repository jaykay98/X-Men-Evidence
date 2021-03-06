@extends('layout')

@section('title', 'X-Men Register')

@section('content')

<div class="col-md-6 mt-5 mx-auto">
  <h1>X-Men Registration</h1>

  @include('validation')

  <form action="create" method="POST">
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}">
    </div>

    @csrf

    <button type="submit" class="btn btn-primary btn-block">Register</button>
  </form>
</div>

@endsection