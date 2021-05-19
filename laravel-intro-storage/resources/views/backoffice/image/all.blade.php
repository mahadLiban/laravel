@extends('layout.app')


@section('content')
    <h1 class="text-danger border-bottom">Image</h1>
    <a class="btn btn-success " href="/image/create">Ajouter</a>
    @foreach ($images as $image)
    
        <p>{{ $image->nom." ".$image->description}}}</p>
        <img src={{ asset("img/".$image->path) }} alt="">
        <a class="btn btn-primary text-white" href="/image/{{ $image->id}}/edit">Edit</a>
        <form action="/image/{{ $image->id}}/delete" method="POST">
            @csrf
            <button class="btn btn-danger btn-sm text-white " type="submit">Delete</button>
            </form>
    @endforeach
    @endsection