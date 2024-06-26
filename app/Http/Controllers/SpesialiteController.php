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
}
