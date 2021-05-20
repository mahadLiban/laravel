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
                <h3 class="mb-0 py-2">albums</h3>
            </div>
            <div class="col-4 text-right">
                <a href={{ route("albums.create") }} class="py-3 btn btn-sm btn-primary">Add album</a>
            </div>
        </div>
    </div>
    
    
    <div class="table-responsive">
        <table class="table align-items-center table-flush">
            <thead class="thead-light">
                <tr class="bg-light">
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($albums as $album)
                <tr>
                    <th scope="row">{{ $album->id }}</th>
                    <td><a href="/albums/{{ $album->id }}">{{ $album->nom}}</a></td>
                    <td>{{ $album->description }}</td>
                    
                    <td>
                        <div class="d-flex ">
                            <a href="/albums/{{ $album->id }}/edit" class="btn btn-primary mx-1">Edit</a>
                            <form action="/albums/{{ $album->id }}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger mx-1 " type="submit">Delete</button>
                            </form>
                            <form action="/albums/{{ $album->id }}/download" method="POST">
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