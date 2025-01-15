<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="_{{$course->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to join this course?</p>
            </div>
            <form action="{{url('/student/registration/join', ['course_id' => $course->id])}}" method="POST">
                <div class="modal-footer">
                    @csrf
                    <button type="submit" class="btn btn-md btn-success d-flex align-items-center gap-1">
                        <ion-icon name="checkmark-circle-outline"></ion-icon>
                        <p class="white-text m-0">Join</p>
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