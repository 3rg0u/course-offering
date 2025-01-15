<div class="d-flex align-items-center justify-content-end gap-3">
    {{-- Modal --}}
    <div class="modal fade" id="_{{$std->id}}" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel">Change student information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{url('/professor/students/update', ['id' => $std->id])}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Student name</label>
                            <input type="text" class="form-control" name="name" required value="{{$std->name}}">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Student's email</label>
                            <input type="email" class="form-control" name="email" value="{{$std->email}}">
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
                            <ion-icon name="save-outline"></ion-icon>
                            <p class="white-text m-0">Save</p>
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
    <a class="btn btn-info btn-sm d-flex align-items-center gap-1" data-bs-toggle="modal" href="#_{{$std->id}}"
        role="button">
        <ion-icon name="create-outline"></ion-icon>
        <p class="white-text m-0">Modify</p>
    </a>
</div>