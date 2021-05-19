<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\PortofolioController;
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

Route::get("/article",[ArticleController::class,"index"])->name("article");
Route::get("/entreprise",[EntrepriseController::class,"index"])->name("entreprise");
Route::get("/portofolio",[PortofolioController::class,"index"])->name("portofolio");

Route::get("/article/create",[ArticleController::class,"create"]);
Route::get("/entreprise/create",[EntrepriseController::class,"create"]);
Route::get("/portofolio/create",[PortofolioController::class,"create"]);

Route::post("/article/store",[ArticleController::class,"store"]);
Route::post("/entreprise/store",[EntrepriseController::class,"store"]);
Route::post("/portofolio/store",[PortofolioController::class,"store"]);


Route::post("/article/{id}/delete",[ArticleController::class,"destroy"]);
Route::post("/entreprise/{id}/delete",[EntrepriseController::class,"destroy"]);
Route::post("/portofolio/{id}/delete",[PortofolioController::class,"destroy"]);

Route::get("/article/{id}/edit",[ArticleController::class,"edit"]);
Route::get("/entreprise/{id}/edit",[EntrepriseController::class,"edit"]);
Route::get("/portofolio/{id}/edit",[PortofolioController::class,"edit"]);

Route::post("/article/{id}/update",[ArticleController::class,"update"]);
Route::post("/entreprise/{id}/update",[EntrepriseController::class,"update"]);
Route::post("/portofolio/{id}/update",[PortofolioController::class,"update"]);
