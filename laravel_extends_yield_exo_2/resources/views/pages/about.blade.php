@extends('layouts.app')

@section('content')
    @include('partials.nav')
    <div class="container">
    <h2 >About Subheading</h2>
    @include('partials.miniNav')
    <div class="row">
        <div class="col-6">
            <img src={{ "img/img.png" }} alt="">
        </div>
        <div class="col-6">
            <h3>About Modern School</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi fuga harum obcaecati sed alias ex provident incidunt ad iure perferendis voluptas laudantium facilis, recusandae veritatis et odio cumque sequi reiciendis?</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet eos placeat, nihil porro tenetur quae magnam inventore nostrum saepe? Quia harum, culpa at ullam natus minima facilis voluptate exercitationem hic!</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error ipsum, labore enim voluptatibus ea nam sapiente obcaecati, aut nostrum sint voluptatem quidem doloremque porro repudiandae ab nulla magnam deserunt nisi.</p>
        </div>

    </div>

    </div>

    
        
    
    @include('partials.footer')
@endsection