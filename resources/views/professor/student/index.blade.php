@extends('professor.app')

@section('title')
Student management
@endsection





@section('content')
<div style="align-content: center;" class="d-flex flex-column gap-3">
    <h1 class="alert h4">Student management</h1>
    <div class="d-flex align-items-center justify-content-end gap-3">
        {{-- Modal --}}
        <div class="modal fade" id="add_student" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
            tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Create a new account</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{url('/professor/students')}}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="name" class="form-label">Student name</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Student's email</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Confirm password</label>
                                <input type="password" class="form-control" name="password_confirmation">
                            </div>
                        </div>
                        <div class="modal-footer d-flex align-items-center gap-3">
                            <button type="submit" class="btn btn-md btn-success d-flex align-items-center gap-1">
                                <ion-icon name="add-circle-outline"></ion-icon>
                                <p class="white-text m-0">Create</p>
                            </button>
                            <button type="button" class="btn btn-md btn-danger d-flex align-items-center gap-1"
                                data-bs-dismiss="modal" aria-label="Close">
                                <ion-icon name="close-circle-outline"></ion-icon>
                                <p class="white-text m-0">Cancel</p>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- End Modal --}}
        <a class="btn btn-success btn-lg d-flex align-items-center gap-1" data-bs-toggle="modal" href="#add_student"
            role="button">
            <ion-icon name="add-circle-outline"></ion-icon>
            <p class="white-text m-0">Create a new account</p>
        </a>
    </div>
</div>
<div class="container-fluid d-flex flex-wrap gap-5">
    @foreach ($students as $std)

        @include('professor.student.card', ['std' => $std])
    @endforeach
</div>


<style>
    .card {
        display: flex;
        flex-direction: column;
        width: calc(100% / 3 - 90px);
        height: auto;
    }

    .card .card-content {
        flex-grow: 4;

    }

    .card .card-nav {
        flex-grow: 1;
        display: flex;
        flex-direction: row;
        align-items: flex-end;
        justify-content: space-between
    }
</style>
@endsection