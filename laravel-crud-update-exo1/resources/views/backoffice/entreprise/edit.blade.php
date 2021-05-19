@extends('layout.app')
@section('content')
    <section class="container">
        <h2 class="text-center my-4">edit entreprise</h2>
        <form method="POST" action="/entreprise/{{ $entreprise->id }}/update">
            @csrf
            <div class="mb-3">
              <label class="form-label">Nom</label>
              <input type="text" class="form-control" value="{{ $entreprise->nom }}" name="nom">
            </div>
            <div class="mb-3">
                <label class="form-label">adresse</label>
                <input type="text" class="form-control" value="{{ $entreprise->adresse }}" name="adresse">
              </div>
              <div class="mb-3">
                <label class="form-label">num</label>
                <textarea name="num" id="" cols="30" rows="10">{{ $entreprise->num }}</textarea>
              </div>
              <div class="mb-3">
                <label class="form-label">prenom</label>
                <textarea name="prenom" id="" cols="30" rows="10">{{ $entreprise->prenom }}</textarea>
              </div>
              <div class="mb-3">
                <label class="form-label">img</label>
                <textarea name="img" id="" cols="30" rows="10">{{ $entreprise->img }}</textarea>
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </section>
@endsection