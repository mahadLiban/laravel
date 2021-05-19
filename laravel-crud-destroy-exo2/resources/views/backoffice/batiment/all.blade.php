@extends('layout.app')


@section('content')
    @include('partial.nav')
    @foreach ($batiments as $batiment)
        <p>{{ $batiment->nom." ".$batiment->adresse." ".$batiment->description }}</p>
        <a class="btn btn-primary text-white" href="/batiment/{{ $batiment->id}}/edit">Edit</a>
        <form action="/batiment/{{ $batiment->id}}/delete" method="POST">
            @csrf
            <button class="btn btn-danger btn-sm text-white " type="submit">Delete</button>
            </form>
    @endforeach
@endsection