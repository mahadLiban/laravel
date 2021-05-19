<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get("/album",[AlbumController::class,"index"])->name("album");
// Route::get("/album/create",[AlbumController::class,"create"]);
// Route::post("/album/store",[AlbumController::class,"store"]);
// Route::post("/album/{id}/delete",[AlbumController::class,"destroy"]);
// Route::get("/album/{id}/edit",[AlbumController::class,"edit"]);
// Route::post("/album/{id}/update",[AlbumController::class,"update"]);
// Route::post('/album/{id}/download', [AlbumController::class,'download']);


// Route::get("/photo",[PhotoController::class,"index"])->name("photo");
// Route::get("/photo/create",[PhotoController::class,"create"]);
// Route::post("/photo/store",[PhotoController::class,"store"]);
// Route::post("/photo/{id}/delete",[PhotoController::class,"destroy"]);
// Route::get("/photo/{id}/edit",[PhotoController::class,"edit"]);
// Route::post("/photo/{id}/update",[PhotoController::class,"update"]);
route::resource("/photo", PhotoController::class);
Route::post('/photo/{id}/download', [photoController::class,'download']);

// Route::get("/user",[UserController::class,"index"])->name("user");
// Route::get("/user/create",[UserController::class,"create"]);
// Route::post("/user/store",[UserController::class,"store"]);
// Route::post("/user/{id}/delete",[UserController::class,"destroy"]);
// Route::get("/user/{id}/edit",[UserController::class,"edit"]);
// Route::post("/user/{id}/update",[UserController::class,"update"]);
// Route::post('/user/{id}/download', [AlbumController::class,'download'])->name('reports.download');
