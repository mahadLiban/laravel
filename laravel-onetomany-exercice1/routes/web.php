<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\PhotoController;
use App\Models\Album;
use App\Models\Photo;
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
    // $album = Album::first();
    // $photo = Photo::first();
    // dd($photo);
    return view('welcome');
});



Route::resource("/albums",AlbumController::class);

Route::resource("/photos",PhotoController::class);

Route::post("/photos/{id}/download",[PhotoController::class,"download"]);