@extends('layout.app')


@section('content')
    @include('partial.nav')
    <h1 class="text-danger border-bottom">portofolio</h1>
    <a class="btn btn-success " href="/portofolio/create">Ajouter</a>

    @foreach ($portofolios as $portofolio)
        <p>{{ $portofolio->titre." ".$portofolio->description." ".$portofolio->path." ".$portofolio->catégorie }}</p>
        <a class="btn btn-primary text-white" href="/portofolio/{{ $portofolio->id}}/edit">Edit</a>
        <form action="/portofolio/{{ $portofolio->id}}/delete" method="POST">
            @csrf
            <button class="btn btn-danger btn-sm text-white " type="submit">Delete</button>
            </form>
    @endforeach
@endsection