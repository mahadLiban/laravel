@extends('layout.app')
@section('content')
    <section class="container">
        <h2 class="text-center my-4">Create image</h2>
        <ul>
            @foreach ($errors->all() as $message) 
                <li>{{ $message }}</li>
            @endforeach

        </ul>
        <form method="POST" action="/image/store" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label class="form-label">nom</label>
              <input type="text" class="form-control"  name="nom">
            </div>
            <div class="mb-3">
                <label class="form-label">path</label>
                <input type="file" class="form-control"  name="path">
              </div>
            <div class="mb-3">
                <label class="form-label">description</label>
                <input type="text" class="form-control"  name="description">
              </div>
             
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </section>
@endsection
