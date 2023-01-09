@extends('layout.main')

@section('content')

<div class="container">
    <div class="card m-3">
        <img src="https://dummyimage.com/600x400/000/ff0000.png&text=Volevi+teeee!+nessuna+image" class="card-img-top" alt="{{$movie->title}}">
        <div class="card-body">
        <h1 class="card-title">{{$movie->title}}</h1>
        <p class="card-text">Titolo originale: {{$movie->original_title}}</p>
        <p class="card-text">Nazionalità: {{$movie->nationality}}</p>
        <p class="card-text">data produzione: {{date('d-M-Y', strtotime($movie->date))}}</p>
        <p class="card-text">Vote: {{$movie->vote}}/10</p>
        <a href="{{route('home')}}" class="btn btn-primary">Torna a raccolta</a>
    </div>
</div>



@endsection