<?php

use App\Http\Controllers\BatimentController;
use App\Http\Controllers\EleveController;
use App\Http\Controllers\FormationController;
use App\Models\Batiment;
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

Route::get("/formation",[FormationController::class,"index"])->name("formation");
Route::get("/batiment",[BatimentController::class,"index"])->name("batiment");
Route::get("/eleve",[EleveController::class,"index"])->name("eleve");

Route::post("/batiment/{id}/delete",[BatimentController::class,"destroy"]);
Route::post("/eleve/{id}/delete",[EleveController::class,"destroy"]);
Route::post("/formation/{id}/delete",[FormationController::class,"destroy"]);

Route::get("/batiment/{id}/edit",[BatimentController::class,"edit"]);
Route::get("/eleve/{id}/edit",[EleveController::class,"edit"]);
Route::get("/formation/{id}/edit",[FormationController::class,"edit"]);

Route::post("/batiment/{id}/update",[BatimentController::class,"update"]);
Route::post("/eleve/{id}/update",[EleveController::class,"update"]);
Route::post("/formation/{id}/update",[FormationController::class,"update"]);

