<?php

namespace App\Http\Controllers;

use App\Models\Plant;
use Illuminate\Http\Request;

class PlantsController extends Controller
{
    public function index()
    {
        $plants = Plant::all();

        return view('plants', compact('plants'));
    }

    public function create()
    {
        return view('create_plant');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'scientific_name' => 'required|string|max:255',
            'description' => 'required|string',
            'environments' => 'required|array',
        ]);

        Plant::create([
            'name' => $request->name,
            'scientific_name' => $request->scientific_name,
            'description' => $request->description,
            'environments' => $request->environments,
        ]);

        return redirect()->route('plants.index');
    }
}
