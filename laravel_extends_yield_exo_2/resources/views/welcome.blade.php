@extends('layouts.app')

@section('content')
    @include('partials.nav')
    <div class="container">
    <h2 >Welcome Subheading</h2>
    @include('partials.miniNav')
    <div class="text-center bg-secondary mb-3">
        <h1 class="pt-4 mt-3 ">Hello CodingSchool</h1><br>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et dicta numquam fuga laboriosam illo, commodi corporis cum. Temporibus, natus error?</p><br>
        <hr>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, vel.</p><br>
        <button type="button" class="btn btn-primary mb-5">About</button>



    </div>
    </div>
    
    @include('partials.footer')
@endsection