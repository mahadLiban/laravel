@extends('layout.app')


@section('content')
    @include('partial.nav')
    @foreach ($eleves as $eleve)
        <p>{{ $eleve->nom . ' ' .$eleve ->prenom . ' ' .$eleve->age. ' ' . $eleve->ddn. " ".$eleve->belge}}</p>
            <a class="btn btn-primary text-white" href="/eleve/{{ $eleve->id}}/edit">Edit</a>
            <form action="/eleve/{{ $eleve->id}}/delete" method="POST">
            @csrf
            <button class="btn btn-danger btn-sm text-white " type="submit">Delete</button>
            </form>
    @endforeach
@endsection