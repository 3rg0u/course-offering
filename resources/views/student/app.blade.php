@extends('layouts.layout')

@section('body')

<style>
    ion-icon {
        font-size: 32px;
    }
</style>
<div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <span class="text-white h5"><b>Student dashboard</b></span>
            </li>
            <li>
                <a href="{{url('/student/')}}" class="h6 d-flex align-items-center ps-4 py-3 my-4">
                    <ion-icon name="grid-outline"></ion-icon>
                    <p class="white-text m-0">Dashboard</p>
                </a>
            </li>
            <li>
                <a href="{{url('/student/registration')}}" class="h6 d-flex align-items-center ps-4 py-3 my-4">
                    <ion-icon name="book-outline"></ion-icon>
                    <p class="white-text m-0">Course registration</p>
                </a>
            </li>
            <li>
                <a href="{{url('/student/courses')}}" class="h6 d-flex align-items-center ps-4 py-3 my-4">
                    <ion-icon name="people-outline"></ion-icon>
                    <p class="white-text m-0">Enrolled courses</p>
                </a>
            </li>
            <li>
                <a href="{{url('/student/profile')}}" class="h6 d-flex align-items-center ps-4 py-3 my-4">
                    <ion-icon name="person-circle-outline"></ion-icon>
                    <p class="white-text m-0">Profile</p>
                </a>
            </li>
            <div class="d-flex flex-column justify-content-end">
                <form action="{{url('/signout')}}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-md d-flex gap-1 align-items-center ms-4">
                        <p class="white-text m-0">Sign out</p>
                        <ion-icon name="log-out-outline"></ion-icon>
                    </button>
                </form>
            </div>
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            @yield('content')
        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->



<style>
    body {
        overflow-x: hidden;
    }

    /* Toggle Styles */

    #wrapper {
        padding-left: 0;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    #wrapper.toggled {
        padding-left: 250px;
    }

    #sidebar-wrapper {
        z-index: 1000;
        position: fixed;
        left: 250px;
        width: 0;
        height: 100%;
        margin-left: -250px;
        overflow-y: auto;
        background-color: #223771;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    #wrapper.toggled #sidebar-wrapper {
        width: 250px;
    }

    #page-content-wrapper {
        width: 100%;
        position: absolute;
        padding: 15px;
    }

    #wrapper.toggled #page-content-wrapper {
        position: absolute;
        margin-right: -250px;
    }

    /* Sidebar Styles */

    .sidebar-nav {
        position: absolute;
        top: 0;
        width: 250px;
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .sidebar-nav li {
        text-indent: 20px;
        line-height: 40px;
    }

    .sidebar-nav li a {
        display: block;
        text-decoration: none;
        color: #fff;
    }

    .sidebar-nav li a:hover {
        text-decoration: none;
        color: #fff;
        background-color: #f88e4d;
    }

    .sidebar-nav li a:active,
    .sidebar-nav li a:focus {
        text-decoration: none;
    }

    .sidebar-nav>.sidebar-brand {
        height: 65px;
        font-size: 18px;
        line-height: 60px;
    }

    .sidebar-nav>.sidebar-brand a {
        color: #999999;
    }

    .sidebar-nav>.sidebar-brand a:hover {
        color: #fff;
        background: none;
    }

    @media(min-width:768px) {
        #wrapper {
            padding-left: 250px;
        }

        #wrapper.toggled {
            padding-left: 0;
        }

        #sidebar-wrapper {
            width: 250px;
        }

        #wrapper.toggled #sidebar-wrapper {
            width: 0;
        }

        #page-content-wrapper {
            padding: 20px;
            position: relative;
        }

        #wrapper.toggled #page-content-wrapper {
            position: relative;
            margin-right: 0;
        }
    }
</style>
@endsection