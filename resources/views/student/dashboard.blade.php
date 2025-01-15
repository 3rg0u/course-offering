@extends('student.app')


@section('title')
Student dashboard
@endsection



@section('content')
<style>
</style>
<div style="align-content: center;">
    <h1 class="alert">Student Functions</h1>
</div>
<div class="wrapper mt-5 gy-5">
    <div class="row mt-5 d-flex justify-content-around">
        <a href="{{url('/student/registration')}}"
            class="d-flex flex-column justify-content-around align-items-center col-6 box">
            <ion-icon name="book-outline" style="font-size: 64px;"></ion-icon>
            <p class="white-text m-0 h5">Course registration</p>
        </a>
        <a href="{{url('/student/courses')}}"
            class="d-flex flex-column justify-content-around align-items-center col-6 box">
            <ion-icon name="people-outline" style="font-size: 64px;"></ion-icon>
            <p class="white-text m-0 h5">Enrolled courses</p>
        </a>
    </div>
    <div class="row mt-5 d-flex justify-content-around">
        <a href="{{url('/studnet/profile')}}"
            class="d-flex flex-column justify-content-around align-items-center col-6 box">
            <ion-icon name="person-circle-outline" style="font-size: 64px;"></ion-icon>
            <p class="white-text m-0 h5">Profile config</p>
        </a>
        <a href="#" class="d-flex flex-column justify-content-around align-items-center col-6 box">
            <ion-icon name="settings-outline" style="font-size: 64px;"></ion-icon>
            <p class="white-text m-0 h5">Settings</p>
        </a>
    </div>
</div>


<style>
    .box {
        background-color: #223771;
        color: #fff;
        width: 250px;
        height: 150px;
        border-radius: 18px;
        text-decoration: none;
        text-align: justify;
    }

    .box:hover {
        background-color: #f88e4d;
        color: #fff;
    }
</style>


@endsection