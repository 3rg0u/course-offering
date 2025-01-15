@extends('professor.app')



@section('title')
    {{$course->name}}
@endsection

@section('content')
<h1 class="text-center pt-4">{{$course->name}}</h1>
<div class="d-flex align-items-center justify-content-end">
    @include('professor.course.config', ['course' => $course])
</div>
<div class="container table-responsive py-5">
<table class="table table-bordered table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Student's ID</th>
      <th scope="col">Student's name</th>
      <th scope="col">Student's email</th>
      <th scope="col">Participation score</th>
      <th scope="col">Midterm score</th>
      <th scope="col">Final exam score</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($zipped as $pair)
        @php
            [$std, $record] = $pair;
        @endphp
        <tr>
        <th scope="row">{{$std->id}}</th>
        <td>{{$std->name}}</td>
        <td>{{$std->email}}</td>
        <td>{{$record->parti}}</td>
        <td>{{$record->midterm}}</td>
        <td>{{$record->final}}</td>
        <td>
            @include('professor.course.action', ['std' => $std, 'course_id' => $course->id])
        </td>
        </tr>
    @endforeach
  </tbody>
</table>
</div>

@endsection
