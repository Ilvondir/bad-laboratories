<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ActorController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::apiResource('movies', MovieController::class);
Route::apiResource('actors', ActorController::class);

Route::get('/movies/{movie}/actors', [MovieController::class, 'getMovieCast']);
Route::put('/movies/{movie}/actors/{actor}', [MovieController::class, 'addActorToMovieCast']);
Route::delete('/movies/{movie}/actors/{actor}', [MovieController::class, 'removeActorFromMovieCast']);
Route::put("/movies/{movie}/cast", [MovieController::class, 'setCast']);
