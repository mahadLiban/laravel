@extends('layout.app')


@section('content')
    <h1 class="text-danger border-bottom">album</h1>
    <a class="btn btn-success " href="/album/create">Ajouter</a>
    @foreach ($albums as $album)
    
        <p>{{ $album->nom." ".$album->description}}</p>
        <a class="btn btn-primary text-white" href="/album/{{ $album->id}}/edit">Edit</a>
        <form action="/album/{{ $album->id}}/delete" method="POST">
            @csrf
            <button class="btn btn-danger btn-sm text-white " type="submit">Delete</button>
            </form>
            <form action="/album/{{ $album->id}}/download">
            @csrf
            <button class="btn btn-danger btn-sm text-white" type="submit">download</button>
            </form>
    @endforeach
@endsection