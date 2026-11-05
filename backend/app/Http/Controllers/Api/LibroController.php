<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLibroRequest;
use App\Http\Requests\UpdateLibroRequest;
use App\Models\Libro;

class LibroController extends Controller
{
    public function index()
    {
        return response()->json(Libro::all(), 200);
    }

    public function store(StoreLibroRequest $request)
    {
        $libro = Libro::create($request->validated());

        return response()->json($libro, 201);
    }

    public function show(string $id)
    {
        return response()->json(Libro::findOrFail($id), 200);
    }

    public function update(UpdateLibroRequest $request, string $id)
    {
        $libro = Libro::findOrFail($id);
        $libro->update($request->validated());

        return response()->json($libro, 200);
    }

    public function destroy(string $id)
    {
        $libro = Libro::findOrFail($id);
        $libro->delete();

        return response()->json(null, 204);
    }
}