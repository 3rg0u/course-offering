@extends('student.app')

@section('title')
Course registration
@endsection



@section('content')
@foreach ($unsub_courses as $course)
    @include('student.registration.card')
@endforeach
@endsection