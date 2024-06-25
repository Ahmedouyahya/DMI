<?php

namespace App\Http\Controllers;

use App\Models\Spesialite;
use Illuminate\Http\Request;

class SpesialiteController extends Controller
{
    public function index()
    {
        $specialties = Spesialite::all();
        return view('spesialite.index', compact('specialties'));
    }

    public function create()
    {
        return view('spesialite.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Spesialite::create($request->all());

        return redirect()->route('spesialite.index')->with('success', 'Specialty created successfully.');
    }

    public function show(Spesialite $spesialite)
    {
        return view('spesialite.show', compact('spesialite'));
    }

    public function edit(Spesialite $spesialite)
    {
        return view('spesialite.edit', compact('spesialite'));
    }

    public function update(Request $request, Spesialite $spesialite)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $spesialite->update($request->all());

        return redirect()->route('spesialite.index')->with('success', 'Specialty updated successfully.');
    }

    public function destroy(Spesialite $spesialite)
    {
        $spesialite->delete();

        return redirect()->route('spesialite.index')->with('success', 'Specialty deleted successfully.');
    }
}

