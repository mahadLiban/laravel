@extends('layout.app')
@section('content')
    <section class="container">
        <h2 class="text-center my-4">Create album</h2>
        <ul>
            @foreach ($errors->all() as $message) 
                <li>{{ $message }}</li>
            @endforeach
  
        </ul>
        <form method="POST" action="/user/store" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label class="form-label">name</label>
              <input type="text" class="form-control"  name="name">
            </div>
            <div class="mb-3">
                <label class="form-label">prenom</label>
                <input type="text" class="form-control"  name="prenom">
            </div>
            <div class="mb-3">
                <label class="form-label">age</label>
                <input type="text" class="form-control"  name="age">
            </div>
            <div class="mb-3">
                <label class="form-label">email</label>
                <input type="text" class="form-control"  name="email">
            </div>
            <div class="mb-3">
                <label class="form-label">pdp</label>
                <input type="file" class="form-control"  name="pdp">
            </div>
            <div class="mb-3">
                <label class="form-label">password</label>
                <input type="text" class="form-control"  name="password">
            </div>
               
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </section>
@endsection
