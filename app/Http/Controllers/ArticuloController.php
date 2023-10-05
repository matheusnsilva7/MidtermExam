<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Articulo::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $articulo = Articulo::create($data);

        return $articulo;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $articulo = Articulo::where('idarticulo', $id)->firstOrFail();
            return $articulo;
        } catch (ModelNotFoundException $e) {

            return response()->json(['message' => 'Articulo not found'], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $articulo = Articulo::where("idarticulo", $id);

        $data = $request->all();

        $articulo->update($data);

        return response()->json(['message' => 'Trabajador updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $articulo = Articulo::where("idarticulo", $id);
        $articulo->delete();

        return response()->json([], 204);
    }
}
