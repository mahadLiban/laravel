@extends('layouts.app')

@section('content')
    @include('partials.nav')
    <h1 class="container">Services Subheading</h1>
    @include('partials.miniNav')
    <div class="card mb-3 m-auto">
        <img src={{ "img/img1.png" }} class="card-img-top  "  alt="...">
      </div>
      <div class="d-flex container justify-content-center">
        <div class="card me-3" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body >
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>

          <div class="card me-3" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body ">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>

          <div class="card me-3" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
      </div>
    @include('partials.footer')
@endsection