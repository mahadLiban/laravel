<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\Cast\String_;

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
    $personne = (object) [
        'prenom' => 'Mahad', 
        'nom' => 'Liban',
        'dateDeNaissance'=> "9/11/94",
        'lieu'=>'Djibouti'
    ];
    return view('welcome',compact("personne"));
});

Route::get("/{number}", function($chiffre){
    if (is_numeric($chiffre)) {
        return view("chiffre", compact("chiffre"));
    } else {
        return view("404");
    }
});


