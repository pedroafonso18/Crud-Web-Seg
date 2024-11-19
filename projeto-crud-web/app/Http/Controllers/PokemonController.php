<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PokemonController extends Controller
{
    public function index()
{
    $pokemons = Pokemon::all();
    return view('pokemons.index', compact('pokemons'));
}

public function create()
{
        $trainers = \App\Models\Trainer::all();
    
    // Passar os treinadores para a view
    return view('pokemons.create', compact('trainers'));
}

public function store(Request $request)
{
    Pokemon::create($request->all());
    return redirect('pokemons')->with('success', 'pokemon created successfully.');
}

public function edit($id)
{
    $pokemon = Pokemon::findOrFail($id);
    $trainers = \App\Models\Trainer::all();
    return view('pokemons.edit', compact('pokemon', 'trainers'));
}

public function update(Request $request, $id)
{
    $pokemon = Pokemon::findOrFail($id);
    $pokemon->update($request->all());
    return redirect('pokemons')->with('success', 'pokemon updated successfully.');
}

public function destroy($id)
{
    $pokemon = Pokemon::findOrFail($id);
    $pokemon->delete();
    return redirect('pokemons')->with('success', 'pokemon deleted successfully.');
}
}