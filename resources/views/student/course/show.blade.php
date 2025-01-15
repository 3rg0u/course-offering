@extends('student.app')



@section('title')
{{$course->name}}
@endsection

@section('content')
<h1 class="text-center pt-4">{{$course->name}}</h1>
<div class="d-flex align-items-center justify-content-end">
    <button type="button" class="btn btn-danger btn-md d-flex align-items-center" data-bs-toggle="modal"
        data-bs-target="#_{{$course->id}}">
        <ion-icon name="exit-outline"></ion-icon>
        <p class="white-text m-0">Leave this course</p>
    </button>
    @include('student.course.confirm', ['course' => $course])
</div>
<div class="container table-responsive py-5">
    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Course's ID</th>
                <th scope="col">Course's name</th>
                <th scope="col">Participation score</th>
                <th scope="col">Midterm score</th>
                <th scope="col">Final exam score</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{$course->id}}</th>
                <td>{{$course->name}}</td>
                <td>{{$record->parti}}</td>
                <td>{{$record->midterm}}</td>
                <td>{{$record->final}}</td>
            </tr>
        </tbody>
    </table>
</div>

@endsection