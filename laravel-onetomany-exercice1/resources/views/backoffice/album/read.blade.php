@extends('layout.app')

@section('content')
<div class="d-flex justify-content-center mt-5">
    <div class="card" style="width: 18rem;">
          <h5 class="card-title">album</h5>
            <p>Nom :{{ $album->nom }}</p>
            <p>Description:{{ $album->description }}</p>
          <a href="{{ route("albums.index") }}" class="btn btn-primary">return home</a>
        </div>
      </div>
</div>
    
@endsection