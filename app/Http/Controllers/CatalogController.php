<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class CatalogController extends Controller
{
    // Mostrar lista de películas
    public function index()
    {
        $movies = Movie::all();
        return view('catalog.index', compact('movies'));
    }

    // Mostrar los detalles de una película
    public function show($id)
    {
        $movie = Movie::findOrFail($id);
        return view('catalog.show', compact('movie'));
    }

    // Mostrar el formulario para crear una nueva película
    public function create()
    {
        return view('catalog.create');
    }

    // Guardar una nueva película
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'year' => 'required|integer',
        ]);

        Movie::create($request->all());
        return redirect()->route('catalog.index')->with('success', 'Película añadida correctamente');
    }

    // Mostrar el formulario para editar una película
    public function edit($id)
    {
        $movie = Movie::findOrFail($id);
        return view('catalog.edit', compact('movie'));
    }

    // Actualizar una película existente
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'year' => 'required|integer',
        ]);

        $movie = Movie::findOrFail($id);
        $movie->update($request->all());
        return redirect()->route('catalog.index')->with('success', 'Película actualizada correctamente');
    }
}
