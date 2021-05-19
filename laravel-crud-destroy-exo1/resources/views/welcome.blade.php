<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href={{ "css/app.css" }}>
</head>
<body>
    <h1 class="text-danger text-center pt-3">Personne</h1>
    <div class="container">
        <div class="row border-bottom">
            <div class="col">#</div>
            <div class="col">Nom</div>
            <div class="col">Prenom</div>
            <div class="col">Age</div>
            <div class="col">Date de naissance</div>
            <div class="col">Genre</div>
            <div class="col">Actions</div>
        </div>
        @foreach ($personnes as $personne)
           <div class="row">
               <div class="col">
                   <p>{{ $personne->id }}</p>
               </div>
            <div class="col">
                <p >{{ $personne->nom }}</p>
            </div>
            <div class="col">
                <p>{{ $personne->prenom }}</p>
            </div>
            <div class="col">
                {{ $personne->age  }}
            </div>
            <div class="col">
                <p>{{ $personne->ddn }}</p>
            </div>
            <div class="col">
                <p class="ps-4">{{ $personne->genre }}</p>
            </div>
            <div class="col">
                <form action="/personne/{{ $personne->id}}/delete" method="POST">
                @csrf
                <button class="btn btn-danger btn-sm text-white " type="submit">Delete</button>
                </form>
            </div>
            
           </div>
        @endforeach
    </div>
</body>
</html>