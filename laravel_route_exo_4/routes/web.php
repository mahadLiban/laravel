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
    return view('index');
});

Route::get('/dateDuJour',function(){
    $date = date('Y-m-d ');
    $heure= date("H:i:s");
    return view('date',compact("date"));
});

Route::get("/fruit",function(){
    $fruits = array('banane','pomme','fraise','cerise');
    
    return view("fruit",compact("fruits"));
});