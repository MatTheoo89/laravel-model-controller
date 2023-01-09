@extends('layout.main')

@section('content')
    <div class="container p-5">
        <h1 class="text-white mb-5">Movies</h1>

        <div class="row d-flex flex-wrap">

            @foreach ($movies as $movie)

            <div class="col-4 mb-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://dummyimage.com/600x400/000/ff0000.png&text=Volevi+teeee!+nessuna+image" class="card-img-top" alt="{{$movie->title}}">
                            <div class="card-body">
                            <h3 class="card-title">{{$movie->title}}</h3>
                            <p class="card-text">Vote: {{$movie->vote}}/10</p>
                            <a href="#" class="btn btn-primary">Details</a>
                        </div>
                    </div>
                </div>
                
            @endforeach
        </div>
    </div>
@endsection

