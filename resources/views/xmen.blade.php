@extends('layout')

@section('title', 'X-Men Applicants')

@section('content')

<div class="jumbotron">
  <h2 class="title" align="center">Mutant Applicant Submissions</h2>
  <table class="table table-stripped table-bordered">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Email</th>
        <th scope="col">Description</th>
        <th scope="col">Before Picture</th>
        <th scope="col">After Picture</th>
      </tr>
    </thead>
    <tbody>
      @foreach($mutants as $mutant)
      <tr>
        <th>{{ $mutant->email }}</th>
        <th>{{ $mutant->description }}</th>
        <th> <img src="{{ asset('uploads/beforePictures/' . $mutant->beforePicture) }}" width="250px" height="200px" alt="Before Picture"></th>
        <th> <img src="{{ asset('uploads/afterPictures/' . $mutant->afterPicture) }}" width="250px" height="200px" alt="After Picture"></th>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection