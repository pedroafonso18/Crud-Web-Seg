<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\pokemonController;
use App\Http\Controllers\TrainerController;

Route::get('pokemons', [pokemonController::class, 'index']);    
Route::get('pokemons/create', [pokemonController::class, 'create']);
Route::post('pokemons', [pokemonController::class, 'store']);
Route::get('pokemons/{id}/edit', [pokemonController::class, 'edit']);
Route::put('pokemons/{id}', [pokemonController::class, 'update']);
Route::delete('pokemons/{id}', [pokemonController::class, 'destroy']);


Route::get('trainers', [TrainerController::class,'index']);
Route::get('trainers/create', [TrainerController::class,'create']);
Route::post('trainers', [TrainerController::class,'store']);
Route::get('trainers/{id}/edit', [TrainerController::class,'edit']);
Route::put('trainers/{id}', [TrainerController::class,'update']);
Route::delete('trainers/{id}', [TrainerController::class,'destroy']);

Route::get('/', function () {
    return view('welcome');
});
