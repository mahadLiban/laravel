@extends('layout.app')
@section('content')
@include('partial.nav')


@if (session('message'))
<div class="alert alert-success">
    {{ session('message') }}
</div>
@endif

<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col-8">
                <h3 class="mb-0 py-2">photos</h3>
            </div>
            <div class="col-4 text-right">
                <a href={{ route("photos.create") }} class="py-3 btn btn-sm btn-primary">Add photo</a>
            </div>
        </div>
    </div>
    
    <div class="table-responsive">
        <table class="table align-items-center table-flush">
            <thead class="thead-light">
                <tr class="bg-light">
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Lien (img)</th>
                    <th scope="col">Catego</th>
                    <th scope="col">Description</th>
                    <th scope="col">Album</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($photos as $photo)
                <tr>
                    <th scope="row">{{ $photo->id }}</th>
                    <td><a href="/photos/{{ $photo->id }}">{{ $photo->nom}}</a></td>
                    <td><img style="width : 200px" src={{ asset('img/'. $photo->lien) }} alt=""></td>
                    <td>{{ $photo->categorie }}</td>
                    <td>{{ $photo->description }}</td>
                    <td>{{ $photo->album_id }}</td>

                    <td>
                        <div class="d-flex ">
                            <a href="/photos/{{ $photo->id }}/edit" class="btn btn-primary mx-1">Edit</a>
                            <form action="/photos/{{ $photo->id }}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger mx-1 " type="submit">Delete</button>
                            </form>
                            <form action="/photos/{{ $photo->id }}/download" method="POST">
                                @csrf
                                <button class="btn btn-warning mx-1" type="submit">Download</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
   
</div>
@endsection
