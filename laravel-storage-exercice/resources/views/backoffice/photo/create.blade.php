@extends('layout.app')
@section('content')
    <section class="container">
        <h2 class="text-center my-4">Create photo</h2>
        <ul>
          @foreach ($errors->all() as $message) 
              <li>{{ $message }}</li>
          @endforeach

      </ul>
        <form method="POST" action={{ route("photo.store") }} enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label class="form-label">nom</label>
              <input type="text" class="form-control"  name="nom">
            </div>
            <div class="mb-3">
              <label class="form-label">Img</label>
              <input type="file" class="form-control"  name="lien">
            </div>
            <div class="mb-3">
              <label class="form-label">Categorie</label>
              <select class="form-select" name="categorie">
                  <option selected>Choisissez une categorie</option>
                  <option value="item1">Item 1</option>
                  <option value="item2">Item 2</option>
                  <option value="item3">Item 3</option>
                  <option value="item4">Item 4</option>
                  <option value="item5">Item 5</option>
              </select>
          </div>
            <div class="mb-3">
                <label class="form-label">description</label>
                <input type="text" class="form-control"  name="description">
              </div>
               
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </section>
@endsection
