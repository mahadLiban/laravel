@extends('layout.app')
@section('content')
    <section class="container">
        <h2 class="text-center my-4 bg-danger">Create photo</h2>
        <ul>
          @foreach ($errors->all() as $message) 
              <li>{{ $message }}</li>
          @endforeach

      </ul>
      
        <form method="POST" action="{{route("photos.store")  }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label class="form-label">nom</label>
              <input type="text" class="form-control"  name="nom">
            </div>

            <div class="mb-3">
                <label class="form-label">Lien(img)</label>
                <input type="file" class="form-control"  name="lien">
              </div>
              
            <div class="mb-3">
                <label class="form-label">categorie</label>
                <select name="categorie" id="">
                    <option value="Album 1"> Album 1</option>
                    <option value="Album 2"> Album 2 </option>
                    <option value="Album 3"> Album 3 </option>
                </select>
            </div>  

            <div class="mb-3">
              <label class="form-label">Description</label>
              <input type="text" class="form-control"  name="description">
            </div>

            <div class="mb-3">
              <label class="form-label">album_id</label>
              <select name="album_id" id="">
                  {{-- <option value=" 1">  1</option>
                  <option value=" 2">  2 </option>
                  <option value=" 3">  3 </option> --}}
              </select>
          </div>     
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </section>
@endsection
