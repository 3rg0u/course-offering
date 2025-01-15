@extends('professor.app')


@section('title')
    Course management
@endsection


@section('content')
<div style="align-content: center;">
    <h1 class="alert h4">Course Management</h1>
    <div class="d-flex align-items-center justify-content-end gap-3">
        {{-- Modal --}}
        <div class="modal fade" id="add_course" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalToggleLabel">Creaet a new course</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{url('/professor/courses')}}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Course name</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="intro" class="form-label">Brief description</label>
                            <textarea name="intro" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer d-flex align-items-center gap-3">
                        <button type="submit" class="btn btn-md btn-success d-flex align-items-center gap-1">
                            <ion-icon name="save-outline"></ion-icon>
                            <p class="white-text m-0">Save</p>
                        </button>
                        <button type="button" class="btn btn-md btn-danger d-flex align-items-center gap-1" data-bs-dismiss="modal" aria-label="Close">
                            <ion-icon name="close-circle-outline"></ion-icon>
                            <p class="white-text m-0">Cancel</p>
                        </button>
                    </div>
                </form>
              </div>
            </div>
        </div>
        {{-- End Modal --}}
        <a class="btn btn-success btn-lg d-flex align-items-center gap-1" data-bs-toggle="modal" href="#add_course" role="button">
            <ion-icon name="add-circle-outline"></ion-icon>
            <p class="white-text m-0">Create a new course</p>
        </a>
    </div>
</div>
    <div class="container-fluid d-flex flex-wrap gap-5">
        @foreach ($courses as $course)

        @include('professor.course.card', ['course' => $course])
        @endforeach
    </div>


    <style>
        .card{
            display: flex;
            flex-direction: column;
            width: calc(100% / 3 - 90px);
            height: auto;
        }

        .card .card-content{
            flex-grow: 4;

        }

        .card .card-nav{
            flex-grow: 1;
            display: flex;
            flex-direction: row;
            align-items: flex-end;
            justify-content: space-between
        }


    </style>
@endsection
