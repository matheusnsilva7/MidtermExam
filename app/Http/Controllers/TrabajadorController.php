<?php

namespace App\Http\Controllers;

use App\Models\Trabajador;
use Illuminate\Http\Request;

class TrabajadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Trabajador::all();
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

        $trabajador = Trabajador::create($data);

        return $trabajador;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $trabajador = Trabajador::where('idtrabajador', $id)->firstOrFail();
        return $trabajador;
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
        $trabajador = Trabajador::where('idtrabajador', $id);
        
        $data = $request->all();

        $trabajador->update($data);

        return response()->json(['message' => 'Trabajador updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $trabajador = Trabajador::where('idtrabajador', $id);
        $trabajador->delete();

        return response()->json([], 204);
    }
}
