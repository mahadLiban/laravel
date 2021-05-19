@extends('layout.app')
@section('content')
    <section class="container">
        <h2 class="text-center my-4">Create album</h2>
        <form method="POST" action="/album/store">
            @csrf
            <div class="mb-3">
              <label class="form-label">nom</label>
              <input type="text" class="form-control"  name="nom">
            </div>
            <div class="mb-3">
                <label class="form-label">description</label>
                <input type="text" class="form-control"  name="description">
              </div>
               
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </section>
@endsection
