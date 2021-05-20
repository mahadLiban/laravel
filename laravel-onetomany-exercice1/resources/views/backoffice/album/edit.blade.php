@extends('layout.app')
@section('content')
    <section class="container">
        <h2 class="text-center my-4 bg-danger">Edit album</h2>
        <ul>
          @foreach ($errors->all() as $message) 
              <li>{{ $message }}</li>
          @endforeach

      </ul>
        <form method="POST" action="/albums/{{ $album->id }}" enctype="multipart/form-data">
            @csrf
            @method("put")
            <div class="mb-3">
              <label class="form-label">nom</label>
              <input value="{{ $album->nom }}" type="text" class="form-control"  name="nom">
            </div>
            <div class="mb-3">
                <label class="form-label">description</label>
                <input value="{{ $album->description }}" type="text" class="form-control"  name="description">
            </div>
            
            
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </section>
@endsection
