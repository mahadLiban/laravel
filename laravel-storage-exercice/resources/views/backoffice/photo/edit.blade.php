@extends('layout.app')
@section('content')
    <section class="container">
        <h2 class="text-center my-4">edit photo</h2>
        <ul>
          @foreach ($errors->all() as $message) 
              <li>{{ $message }}</li>
          @endforeach

      </ul>
        <form method="POST" action="/photo/{{ $photo->id }}" enctype="multipart/form-data">
            @csrf
            @method("put")
            <div class="mb-3">
              <label class="form-label">nom</label>
              <input type="text" class="form-control" value="{{ $photo->nom }}" name="nom">
            </div>
            <div class="mb-3">
                <label class="form-label">lien</label>
                <input type="file" class="form-control" value="{{ $photo->lien }}" name="lien">
              </div>
              <div class="mb-3">
                <label class="form-label">categorie</label>
                <input type="categorie" class="form-control" value="{{ $photo->description }}" name="categorie">
              </div>
            <div class="mb-3">
                <label class="form-label">description</label>
                <input type="text" class="form-control" value="{{ $photo->description }}" name="description">
              </div> 
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </section>
@endsection