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
    return "welcome";
});

Route::get('about/{a}',function ($a) {
   
    return view("pages.about", compact("a"));
}) ->name("monAbout");

Route::get('contact/{a}/{b}/{c}',function($a,$b,$c){
    return view("pages.contact", compact("a","b","c"));
}) -> name("monContact");