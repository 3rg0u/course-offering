<div class="card" style="width:calc(100% / 4 - 120px)">
    <img class="card-img-top"
        src="https://www.awardstoday.it/wp-content/uploads/2024/03/1_oppenheimer-e-il-film-piu-inaccessibile-ed-elitario-di-christopher-nolan-recensione__13511.jpg"
        alt="Card image" style="width:100%">
    <div class="card-body">
        <h4 class="card-title">{{$std->name}}</h4>
        <p class="card-text">{{$std->email}}</p>
        <div class="d-flex align-items-center gap-3">
            @include('professor.student.form', ['std' => $std])
            <form action="{{url('/professor/students/delete', $std->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm d-flex align-items-center gap-1">
                    <ion-icon name="trash-outline"></ion-icon>
                    <p class="white-text m-0">Delete</p>
                </button>
            </form>
        </div>
    </div>
</div>