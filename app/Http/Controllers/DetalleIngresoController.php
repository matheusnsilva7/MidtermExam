<?php

namespace App\Http\Controllers;

use App\Models\DetalleIngreso;
use Illuminate\Http\Request;

class DetalleIngresoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return DetalleIngreso::all();
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

        $detalleIngreso = DetalleIngreso::create($data);

        return $detalleIngreso;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $detalleIngreso = DetalleIngreso::where('iddetalle_ingreso', $id)->firstOrFail();
        return $detalleIngreso;
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
        $detalleIngreso = DetalleIngreso::where('iddetalle_ingreso', $id);

        $data = $request->all();

        $detalleIngreso->update($data);

        return response()->json(['message' => 'Trabajador updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $detalleIngreso = DetalleIngreso::where('iddetalle_ingreso', $id);
        $detalleIngreso->delete();

        return response()->json([], 204);
    }
}
