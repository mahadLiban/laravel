@extends('layout.app')

@section('content')
<div class="d-flex justify-content-center mt-5">
    <div class="card" style="width: 18rem;">
        <img style="width : 200px" src={{ asset('img/'. $photo->lien) }} alt="">        <div class="card-body">
          <h5 class="card-title">photo</h5>
            <p>Nom :{{ $photo->nom }}</p>
            <p>Categorie:{{ $photo->categorie }}</p>
            <p>Description:{{ $photo->description }}</p>
            <p>album_id:{{ $photo->album_id }}</p>

          <a href="{{ route("photos.index") }}" class="btn btn-primary">return home</a>
        </div>
      </div>
</div>
    
@endsection