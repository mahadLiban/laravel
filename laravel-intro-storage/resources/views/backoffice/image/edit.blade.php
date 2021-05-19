@extends('layout.app')
@section('content')
    <section class="container">
        <h2 class="text-center my-4">edit image</h2>
        <ul>
          @foreach ($errors->all() as $message) 
              <li>{{ $message }}</li>
          @endforeach

      </ul>
        <form method="POST" action="/image/{{ $image->id }}/update" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label class="form-label">nom</label>
              <input type="text" class="form-control" value="{{ $image->nom }}" name="nom">
            </div>
            <div class="mb-3">
                <label class="form-label">path</label>
                <input type="file" class="form-control" value="{{ $image->path }}" name="path">
              </div>
            <div class="mb-3">
                <label class="form-label">description</label>
                <input type="text" class="form-control" value="{{ $image->description }}" name="description">
              </div>
              
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </section>
@endsection