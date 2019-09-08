@extends('layout')

@section('title', 'Mutant Register')

@section('content')

<div class="col-md-6 mt-5 mx-auto">
  <h1>Mutant Registration</h1>

  <form action="register" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="beforePicture">Before Picture</label>
      <input type="file" class="form-control-file" id="beforePicture" name="beforePicture">
      @if ($errors->has('beforePicture'))
        <span class="text-danger">{{ $errors->first('beforePicture') }}</span>
      @endif
    </div>
    <div class="form-group">
      <label for="afterPicture">After Picture</label>
      <input type="file" class="form-control-file" id="afterPicture" name="afterPicture">
      @if ($errors->has('afterPicture'))
        <span class="text-danger">{{ $errors->first('afterPicture') }}</span>
      @endif
    </div>
    <div class="form-group">
      <label for="email-address">Email Address</label>
      <input type="email" class="form-control" id="email-address" name="email" aria-describedby="email" value="{{ old('email') }}" placeholder="Enter your email" required>
      @if ($errors->has('email'))
        <span class="text-danger">{{ $errors->first('email') }}</span>
      @endif
    </div>
    <div class="form-group">
      <label for="description">My Powers</label>
      <textarea class="form-control" id="description" name="description" rows="3" value="{{ old('description') }}" placeholder="Enter a short description of your powers..." required></textarea>
      @if ($errors->has('description'))
        <span class="text-danger">{{ $errors->first('description') }}</span>
      @endif
    </div>

    @csrf

    <button type="submit" class="btn btn-primary btn-block">Submit</button>

  </form>

</div>

@endsection