<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get("/",function(){
    return "Bonjour chers utilisateurs";
});

Route::get("/",function(){
    $nom = "Mahad";
    $Age = 26;
    return "je suis $nom et j'ai $Age ans";
});


// Route::get("/{chiffre}",function($x){
//     $nom = "Mahad";
//     return "Hello $nom tu as ecris : $x";
// });

Route::get("/welcom",function(){
    return view("welcom");
});
Route::get("/about",function(){
    return view("about");
});