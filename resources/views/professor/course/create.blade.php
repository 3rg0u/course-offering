@extends('professor.app')


@section('content')
<form action="{{url('/professor/courses')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Course name</label>
        <input type="text" class="form-control" name="name" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="intro" class="form-label">Write some description</label>
        <input type="text" class="form-control" name="intro">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
