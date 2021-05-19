@extends('layout.app')

@section('content')
    <h1 class="text-danger d-flex justify-content-center">photo</h1>
    <a class="btn btn-success d-flex justify-content-center " href={{route("photo.create")  }}>Ajouter</a>
    @if (session('message'))
        <div class=" alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    @foreach ($photos as $photo)
    <div class="d-flex justify-content-space-between">
    </div>
    
    <h3 class="d-flex ms-2 border border-3 justify-content-center">Nom</h3>

        <p class="">{{ $photo->nom}}</p>
        <h3 class="d-flex ms-2 border border-3 justify-content-center">Img</h3>
        
            <img src="{{ asset("img/" . $photo->lien) }}" alt="">
        
            {{-- <p>{{ $photo->lien }}</p> --}}
            <h3 class="d-flex ms-2 border border-3 justify-content-center">Cathegorie</h3>
            <p>{{ $photo->categorie }}</p>
            <h3 class="d-flex ms-2 border border-3 justify-content-center">Description</h3>
            <p>{{ $photo->description }}</p>
            <div class="d-flex justify-content-center">
        <a class="btn btn-primary text-white" href="/photo/{{ $photo->id}}/edit">Edit</a>
        <form action="/photo/{{ $photo->id}}" method="POST">
            @csrf
            @method("delete")
                <button class="btn btn-danger btn-sm text-white justify-content-center" type="submit">Delete</button>
                </form>
                <form action="/photo/{{ $photo->id}}/download" method="post">
                @csrf
                <button class="btn btn-danger btn-sm text-white" type="submit">download</button>
            </div>
            </form>
    
    @endforeach
@endsection