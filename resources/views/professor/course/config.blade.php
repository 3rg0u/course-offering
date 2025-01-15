<div class="config-label d-flex align-items-center gap-3">
    {{-- Modal --}}
    <div class="modal fade" id="_{{$course->id}}" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel">Modify information of the course:
                        {{$course->name}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{url('/professor/courses/update', $course->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Course name</label>
                            <input type="text" class="form-control" name="name" value="{{$course->name}}">
                        </div>
                        <div class="mb-3">
                            <label for="intro" class="form-label">Brief description</label>
                            <textarea name="intro" cols="30" rows="10"
                                class="form-control">{{$course->intro}}</textarea>
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
    <a class="btn btn-success btn-md d-flex align-items-center gap-1" data-bs-toggle="modal" href="#_{{$course->id}}"
        role="button">
        <ion-icon name="create-outline"></ion-icon>
        <p class="white-text m-0">Modify</p>
    </a>

    <form action="{{url('/professor/courses/delete', $course->id)}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-md d-flex gap-1 align-items-center">
            <ion-icon name="trash-outline"></ion-icon>
            <p class="white-text m-0">Remove</p>
        </button>
    </form>

</div>