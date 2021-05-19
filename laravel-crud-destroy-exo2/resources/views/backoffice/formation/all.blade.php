@extends('layout.app')


@section('content')
    @include('partial.nav')
    @foreach ($formations as $formation)    
        <p>{{ $formation->nom . "".$formation->ndp." " .$formation->hcd."".$formation->description }}</p>
            <a class="btn btn-primary text-white" href="/formation/{{ $formation->id}}/edit">Edit</a>
            <form action="/formation/{{ $formation->id}}/delete" method="POST">
            @csrf
            <button class="btn btn-danger btn-sm text-white " type="submit">Delete</button>
            </form>
    @endforeach
@endsection