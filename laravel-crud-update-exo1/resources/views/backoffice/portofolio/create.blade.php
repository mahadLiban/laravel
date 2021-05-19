@extends('layout.app')
@section('content')
    <section class="container">
        <h2 class="text-center my-4">edit portofolio</h2>
        <form method="POST" action="/portofolio/stor">
            @csrf
            <div class="mb-3">
              <label class="form-label">titre</label>
              <input type="text" class="form-control"  name="titre">
            </div>
            <div class="mb-3">
                <label class="form-label">description</label>
                <input type="text" class="form-control"  name="description">
              </div>
              <div class="mb-3">
                <label class="form-label">path</label>
                <textarea name="path" id="" cols="30" rows="10"></textarea>
              </div>
              <div class="mb-3">
                <label class="form-label">catégorie</label>
                <textarea name="catégorie" id="" cols="30" rows="10"></textarea>
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </section>
@endsection
