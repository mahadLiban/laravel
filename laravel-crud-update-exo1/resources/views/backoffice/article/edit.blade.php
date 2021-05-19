@extends('layout.app')
@section('content')
    <section class="container">
        <h2 class="text-center my-4">edit article</h2>
        <form method="POST" action="/article/{{ $article->id }}/update">
            @csrf
            <div class="mb-3">
              <label class="form-label">Nom</label>
              <input type="text" class="form-control" value="{{ $article->nom }}" name="nom">
            </div>
            <div class="mb-3">
                <label class="form-label">description</label>
                <input type="text" class="form-control" value="{{ $article->description }}" name="description">
              </div>
              <div class="mb-3">
                <label class="form-label">autor</label>
                <textarea name="autor" id="" cols="30" rows="10">{{ $article->autor }}</textarea>
              </div>
              <div class="mb-3">
                <label class="form-label">post</label>
                <textarea name="post" id="" cols="30" rows="10">{{ $article->post }}</textarea>
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </section>
@endsection