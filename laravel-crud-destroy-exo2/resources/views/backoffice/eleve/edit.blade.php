@extends('layout.app')
@section('content')
    <section class="container">
        <h2 class="text-center my-4">edit eleve</h2>
        <form method="POST" action="/eleve/{{ $eleve->id }}/update">
            @csrf
            <div class="mb-3">
              <label class="form-label">Nom</label>
              <input type="text" class="form-control" value="{{ $eleve->nom }}" name="nom">
            </div>
            <div class="mb-3">
                <label class="form-label">Prenom</label>
                <input type="text" class="form-control" value="{{ $eleve->prenom }}" name="prenom">
            </div>
            <div class="mb-3">
              <label class="form-label">Age</label>
              <input type="text" class="form-control" value="{{ $eleve->age }}" name="age">
            </div>

              <div class="mb-3">
                <label class="form-label">ddn</label>
                <input type="text"class="form-control" value="{{ $eleve->ddn }}" name="ddn">
              </div>
              <div class="mb-3">
                <label class="form-label">Belge</label>
                <input type="text"class="form-control" value="{{ $eleve->belge }}" name="belge">
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </section>
@endsection