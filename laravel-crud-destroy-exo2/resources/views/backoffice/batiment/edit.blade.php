@extends('layout.app')
@section('content')
    <section class="container">
        <h2 class="text-center my-4">edit batiment</h2>
        <form method="POST" action="/batiment/{{ $batiment->id }}/update">
            @csrf
            <div class="mb-3">
              <label class="form-label">Nom</label>
              <input type="text" class="form-control" value="{{ $batiment->nom }}" name="nom">
            </div>
            <div class="mb-3">
                <label class="form-label">Adresse</label>
                <input type="text" class="form-control" value="{{ $batiment->adresse }}" name="adresse">
              </div>
              <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" id="" cols="30" rows="10">{{ $batiment->description }}</textarea>
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </section>
@endsection