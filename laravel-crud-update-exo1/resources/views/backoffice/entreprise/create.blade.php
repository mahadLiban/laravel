@extends('layout.app')
@section('content')
    <section class="container">
        <h2 class="text-center my-4">Create entreprise</h2>
        <form method="POST" action="/entreprise/store">
            @csrf
            <div class="mb-3">
              <label class="form-label">Nom</label>
              <input type="text" class="form-control"  name="nom">
            </div>
            <div class="mb-3">
                <label class="form-label">adresse</label>
                <input type="text" class="form-control"  name="adresse">
              </div>
              <div class="mb-3">
                <label class="form-label">num</label>
                <textarea name="num" id="" cols="30" rows="10"></textarea>
              </div>
              <div class="mb-3">
                <label class="form-label">prenom</label>
                <textarea name="prenom" id="" cols="30" rows="10"></textarea>
              </div>
              <div class="mb-3">
                <label class="form-label">img</label>
                <textarea name="img" id="" cols="30" rows="10"></textarea>
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </section>
@endsection