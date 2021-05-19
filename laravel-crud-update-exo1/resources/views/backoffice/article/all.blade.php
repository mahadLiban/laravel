@extends('layout.app')


@section('content')
    @include('partial.nav')
    <h1 class="text-danger border-bottom">article</h1>
    <a class="btn btn-success " href="/article/create">Ajouter</a>
    @foreach ($articles as $article)
    
        <p>{{ $article->nom." ".$article->description." ".$article->autor." ".$article->post }}</p>
        <a class="btn btn-primary text-white" href="/article/{{ $article->id}}/edit">Edit</a>
        <form action="/article/{{ $article->id}}/delete" method="POST">
            @csrf
            <button class="btn btn-danger btn-sm text-white " type="submit">Delete</button>
            </form>
    @endforeach
@endsection