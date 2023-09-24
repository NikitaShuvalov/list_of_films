<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/movies", [MovieController::class, "index"]);
Route::get("/movies/{id}", [MovieController::class, "show"]);

Route::get("/create", [MovieController::class, "create"]);
Route::post("/create", [MovieController::class, "store"]);

Route::get("/edit/{id}", [MovieController::class, "edit"]);
Route::post("/edit/{id}", [MovieController::class, "update"]);

Route::get("/delete/{id}", [MovieController::class, "destroy"]);
