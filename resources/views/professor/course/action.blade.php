<div class="modal fade" id="record_{{$std->id}}" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel">Grading for student: {{$std->name}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{url('/professor/records/update/' . $course->id . '/' . $std->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="parti" class="form-label">Participation score</label>
                        <input type="number" min="0" max="10" class="form-control" name="parti">
                    </div>
                    <div class="mb-3">
                        <label for="midterm" class="form-label">Midterm score</label>
                        <input type="number" min="0" max="10" class="form-control" name="midterm">
                    </div>
                    <div class="mb-3">
                        <label for="final" class="form-label">Final exam score</label>
                        <input type="number" min="0" max="10" class="form-control" name="final">
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

<div class="d-flex align-items-center gap-3">
    <a class="btn btn-info btn-sm d-flex align-items-center gap-1" data-bs-toggle="modal" href="#record_{{$std->id}}"
        role="button">
        <ion-icon name="create-outline"></ion-icon>
        <p class="white-text m-0">Grade</p>
    </a>

    <form action="{{url('/professor/records/delete/' . $course->id . '/' . $std->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-sm btn-danger d-flex align-items-center gap-1">
            <ion-icon name="trash-outline"></ion-icon>
            <p class="white-text m-0">Remove</p>
        </button>
    </form>
</div>