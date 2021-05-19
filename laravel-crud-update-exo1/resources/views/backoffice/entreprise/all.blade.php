@extends('layout.app')


@section('content')
    @include('partial.nav')
    <h1 class="text-danger border-bottom">entreprise</h1>
    <a class="btn btn-success " href="/entreprise/create">Ajouter</a>

    @foreach ($entreprises as $entreprise)
        <p>{{ $entreprise->nom." ".$entreprise->adresse." ".$entreprise->num." ".$entreprise->prenom." ".$entreprise->img  }}</p>
        <a class="btn btn-primary text-white" href="/entreprise/{{ $entreprise->id}}/edit">Edit</a>
        <form action="/entreprise/{{ $entreprise->id}}/delete" method="POST">
            @csrf
            <button class="btn btn-danger btn-sm text-white " type="submit">Delete</button>
            </form>
    @endforeach
@endsection