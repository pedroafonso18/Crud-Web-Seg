<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\pokemonController;

Route::get('pokemons', [pokemonController::class, 'index']);    
Route::get('pokemons/create', [pokemonController::class, 'create']);
Route::post('pokemons', [pokemonController::class, 'store']);
Route::get('pokemons/{id}/edit', [pokemonController::class, 'edit']);
Route::put('pokemons/{id}', [pokemonController::class, 'update']);
Route::delete('pokemons/{id}', [pokemonController::class, 'destroy']);

Route::get('/', function () {
    return view('welcome');
});
