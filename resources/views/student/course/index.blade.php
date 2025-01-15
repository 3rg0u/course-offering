@extends('student.app')

@section('title')
Course registration
@endsection



@section('content')
@foreach ($courses as $course)
    @include('student.course.card')
@endforeach
@endsection