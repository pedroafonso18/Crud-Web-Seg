<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TrainerController extends Controller
{
    public function index()
{
    $trainers = Trainer::all();
    return view('trainers.index', compact('trainers'));
}

public function create()
{
    $trainers = Trainer::all(); // Obtem os treinadores
    return view('trainers.create', compact('trainers'));
}

public function store(Request $request)
{
    Trainer::create($request->all());
    return redirect('trainers')->with('success', 'trainer created successfully.');
}

public function edit($id)
{
    $trainer = Trainer::findOrFail($id);
    return view('trainers.edit', compact('trainer'));
}

public function update(Request $request, $id)
{
    $trainer = Trainer::findOrFail($id);
    $trainer->update($request->all());
    return redirect('trainers')->with('success', 'trainer updated successfully.');
}

public function destroy($id)
{
    $trainer = Trainer::findOrFail($id);
    $trainer->delete();
    return redirect('trainers')->with('success', 'trainer deleted successfully.');
}
}