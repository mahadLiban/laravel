@extends('layout.app')
@section('content')
    <section class="container">
        <h2 class="text-center my-4">edit formation</h2>
        <form method="POST" action="/formation/{{ $formation->id }}/update">
            @csrf
            <div class="mb-3">
              <label class="form-label">Nom</label>
              <input type="text" class="form-control" value="{{ $formation->nom }}" name="nom">
            </div>
            <div class="mb-3">
                <label class="form-label">ndp</label>
                <input type="text" class="form-control" value="{{ $formation->ndp }}" name="ndp">
              </div>
              <div class="mb-3">
                <label class="form-label">hcd</label>
                <input type="text" class="form-control" value="{{ $formation->hcd }}" name="hcd">
              </div>
              <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" id="" cols="30" rows="10">{{ $formation->description }}</textarea>
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </section>
@endsection